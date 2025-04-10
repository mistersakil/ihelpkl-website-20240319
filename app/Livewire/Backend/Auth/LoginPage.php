<?php

namespace App\Livewire\Backend\Auth;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

/**
 * LoginPage Component
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class LoginPage extends Component
{

    ## Component props
    public string $metaTitle = 'admin login';
    public string $logo;

    ## State props
    public string $email = '';
    public string $password = '';
    public bool $remember_me = false;


    /**
     * To initialize value just for once
     * 
     * @return void
     */

    public function mount()
    {
        // $this->email = 'sakil@gmail.com';
        // $this->password = '12345678#';
        $this->remember_me = false;
        $this->logo =  _getPublicImg('logo');
    }


    /**
     * Validation rules
     * 
     * @return array
     */
    protected function rules(): array
    {
        return [
            'email'             => ['required', 'email'],
            'password'          => ['required', 'min:8'],
        ];
    }

    /**
     * Customize the validation messages
     * 
     * @return array
     */
    protected function messages(): array
    {
        return [
            'email.required'    => __('can not be empty', [':attribute']),
            'email.email'       => 'Email format is invalid',
            'password.required' => __('can not be empty', [':attribute']),
            'password.min'      => 'Password minimum length is 8',
        ];
    }

    /**
     * Alias of state attributes
     * 
     * @return array
     */
    public function validationAttributes()
    {
        return [
            'email' => __('email'),
            'password' => __('password'),
        ];
    }


    /**
     * To validate an input field after every update
     * @return void
     */

    public function updated($propertyName): void
    {
        $this->validateOnly($propertyName);
    }

    /**
     * Login process
     */
    public function login_process()
    {

        ## Validate rules
        $this->validate();

        ## Attempt to login
        if (Auth::attemptWhen(['email' => $this->email, 'password' => $this->password], function (User $user) {
            return $user->is_active == 1;
        }, $this->remember_me)) {
            request()->session()->regenerate();
            return redirect()->intended('admin');
        } else {
            $this->dispatchBrowserEvent('invalid', ['message' => __('Invalid email or password')]);
        }
    }


    /**
     * @return \Illuminate\Contracts\View\View
     */
    #[Layout('livewire.backend.auth.auth-layout')]
    #[Title('Admin Login')]
    public function render(): View
    {
        return view('livewire.backend.auth.login-page');
    }
}
