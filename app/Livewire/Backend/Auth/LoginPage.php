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
    public string $loader;

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
        $this->email = 'sakil@gmail.com';
        $this->password = '12345678#';
        $this->remember_me = false;
        $this->logo =  _getPublicImg('logo');
        $this->loader =  _getPublicImg('loader');
    }


    /**
     * Validation rules
     * 
     * @return array
     */
    protected function rules(): array
    {
        return [
            'email'             => ['required', 'email', 'min:10', 'max:50'],
            'password'          => ['required', 'min:6', 'max:20'],
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
            'email.email'    => __('format is invalid', [':attribute']),
            'email.min'      => __('minimum character length', [':attribute', ':min']),
            'email.max'      => __('maximum character length', [':attribute', ':max']),
            'password.required' => __('can not be empty', [':attribute']),
            'password.min'      => __('minimum character length', [':attribute', ':min']),
            'password.max'      => __('maximum character length', [':attribute', ':max']),
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
     * 
     * @return void
     */

    public function updated($propertyName): void
    {
        $this->validateOnly($propertyName);
    }

    /**
     * Login process
     * 
     * @return void
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
            $this->dispatch('invalid', ['message' => __('invalid email or password'), 'code' => 404]);
        }
    }


    /**
     * @return \Illuminate\Contracts\View\View
     */
    #[Layout('livewire.backend.auth.auth-layout')]
    public function render(): View
    {
        return view('livewire.backend.auth.login-page');
    }
}
