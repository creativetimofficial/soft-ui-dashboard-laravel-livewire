<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Livewire\Component;

class ResetPassword extends Component
{
    public $email = '';
    public $password = '';
    public $passwordConfirmation = '';

    public $showSuccesNotification = false; 
    public $showFailureNotification = false;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6|same:passwordConfirmation'
    ];  

    public function resetPassword() {
        $newCredentials = $this->validate();
        $existingUser = User::where('email', $this->email)->first();
        if($existingUser) {
            $existingUser->update([
                'password' => Hash::make($this->password) 
            ]);
            $this->showSuccesNotification = true;
            $this->showFailureNotification = false;
        } else {
            $this->showFailureNotification = true;
        }
    }

    public function render()
    {
        return view('livewire.auth.reset-password')->layout('layouts.password');
    }
}
