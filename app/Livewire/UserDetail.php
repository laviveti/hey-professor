<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserDetail extends Component
{
    public User $user;

    public function refresh()
    {
    }

    public function mount()
    {
        if (auth()->check()) {
            $this->user = auth()->user() instanceof User ? auth()->user() : new User;
        }
    }

    public function render()
    {
        return view('livewire.user-detail');
    }
}
