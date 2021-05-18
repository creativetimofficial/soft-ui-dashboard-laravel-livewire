<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\User;

class Profile extends Component
{   
    public User $user;
    public $showSuccesNotification  = false;
    
    protected $rules = [
        'user.name' => 'max:40|min:3',
        'user.email' => 'email',
        'user.phone' => 'numeric|min:11',
        'user.about' => 'max:200',
        'user.location' => 'min:3'
    ];

    public function mount() { 
        $this->user = auth()->user();
    }

    public function save() {
        $this->validate();
        $this->user->save();
        $this->showSuccesNotification = true;
    }

    public function render()
    {
        return view('livewire.profile');
    }
}
