<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Counter extends Component
{
  public int $counter = 0;

  public function render(): View
  {
    return view('livewire.counter');
  }

  public function count(): void
  {
    $this->counter++;
  }
}