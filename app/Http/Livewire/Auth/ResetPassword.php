<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class ResetPassword extends Component
{
    public $email = '';
    public $password = '';
    public $passwordConfirmation = '';

    public $showSuccesNotification = false; 
    public $showFailureNotification = false;

    public $urlID = '';

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6|same:passwordConfirmation'
    ];  

    public function mount() {
        $this->urlID = intval(Request::segment(2));
    }

    public function resetPassword() {
        $newCredentials = $this->validate();
        $existingUser = User::where('email', $this->email)->first();
        if($existingUser && $existingUser->id == $this->urlID) { 
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
        return view('livewire.auth.reset-password')->layout('layouts.base');
    }
}
