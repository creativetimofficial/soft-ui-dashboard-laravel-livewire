<?php

namespace App\Http\Livewire\LaravelExamples;
use App\Models\User;

use Livewire\Component;

class UserProfile extends Component
{
    public User $user;
    public $showSuccesNotification  = false;

    public $showDemoNotification = false;
    
    protected $rules = [
        'user.name' => 'max:40|min:3',
        'user.email' => 'email:rfc,dns',
        'user.phone' => 'max:10',
        'user.about' => 'max:200',
        'user.location' => 'min:3'
    ];

    public function mount() { 
        $this->user = auth()->user();
    }

    public function save() {
        if(env('IS_DEMO')) {
           $this->showDemoNotification = true;
        } else {
            $this->validate();
            $this->user->save();
            $this->showSuccesNotification = true;
        }
    }
    public function render()
    {
        return view('livewire.laravel-examples.user-profile');
    }
}
