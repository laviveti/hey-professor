<?php

namespace App\Livewire;

use App\Livewire\Forms\UserForm;
use App\Models\User;
use Livewire\Component;

class EditUser extends Component
{
  public User $user;
  public UserForm $form;

  public function mount()
  {
    $this->form->id = $this->user->id;
    $this->form->name = $this->user->name;
    $this->form->email = $this->user->email;
  }

  public function render()
  {
    return view('livewire.edit-user');
  }

  public function submit()
  {
    $this->form->save();
  }
}
