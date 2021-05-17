<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Login extends Component
{
    public $email = '';
    public $password = '';

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required'
    ];

    public function login() {
        $credentials = $this->validate();

        return auth()->attempt($credentials) ? 
            redirect()->intended('/dashboard') 
            : $this->addError('email', trans('auth.failed')); ;
    }

    public function render()
    {
        return view('livewire.auth.login')->layout('layouts.auth-login');
    }
}
