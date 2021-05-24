<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Model\User;

class Login extends Component
{
    public $email = '';
    public $password = '';

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function mount() {
        $this->fill(['email' => 'admin@softui.com', 'password' => 'secret']);
    }

    public function login() {
        $credentials = $this->validate();

        return auth()->attempt(['email' => $this->email, 'password' => $this->password]) ? 
            redirect()->intended('/dashboard') 
            : $this->addError('email', trans('auth.failed')); 
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
