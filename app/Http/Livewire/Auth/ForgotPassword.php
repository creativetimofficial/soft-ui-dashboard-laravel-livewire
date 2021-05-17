<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;

class ForgotPassword extends Component
{
    public $email = '';

    public $showSuccesNotification = false; 
    public $showFailureNotification = false;

    protected $rules = [
        'email' => 'required|email',
    ];  

    public function routeNotificationForMail() {
        return $this->email;
    }

    public function recoverPassword() { 
        $this->validate();
        $user = User::where('email', $this->email)->first();
        //dd($user);
        if($user){
            $user->sendPasswordResetNotification($user->id);
            $this->showSuccesNotification = true;
            $this->showFailureNotification = false;
        } else {
            $this->showFailureNotification = true;
        }
    }

    public function render()
    {
        return view('livewire.auth.forgot-password')->layout('layouts.password');
    }
}
