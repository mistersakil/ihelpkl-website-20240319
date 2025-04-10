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

    ## State props
    public string $email;
    public string $password;
    public bool $remember_me;

    /**
     * Validation rules
     * @var array
     */
    protected $rules = [
        'email'             => ['required', 'email'],
        'password'          => ['required', 'min:8'],
    ];

    /**
     * Customize the validation messages
     * @var array
     */
    protected $messages = [
        'email.required'    => 'Email can not be empty',
        'email.email'       => 'Email format is invalid',
        'password.required' => 'Password can not be empty',
        'password.min'      => 'Password minimum length is 8',
    ];

    /**
     * To initialize value just for once
     * @return void
     */

    public function mount()
    {
        $this->email = 'sakil@gmail.com';
        $this->password = '12345678#';
        $this->remember_me = false;
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