<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\User;

use Illuminate\Notifications\Notifiable;
use App\Notifications\ResetPassword;

class ForgotPassword extends Component
{
    use Notifiable;

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
        if($user){
            $this->notify(new ResetPassword($user->id));
            $this->showSuccesNotification = true;
            $this->showFailureNotification = false;
        } else {
            $this->showFailureNotification = true;
        }
    }

    public function render()
    {
        return view('livewire.auth.forgot-password')->layout('layouts.base');
    }
}
