<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Livewire\Component;

class UserResume extends Component
{
  #[Rule(['required', 'max:255', 'min:5'])]
  public ?string $resume = null;
  public function render()
  {
    return view('livewire.user-resume');
  }

  public function mount()
  {
    $this->resume = auth()->user()->resume;
  }

  public function updated($attr, $value)
  {
    auth()->user()->update([
      $attr => $value,
    ]);
  }
}
