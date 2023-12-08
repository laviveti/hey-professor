<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Renderless;
use Livewire\Component;

class Calculator extends Component
{
  public float $num1 = 0;
  public float $num2 = 0;
  public string $operator = '+';
  public ?float $result = null;
  public function render()
  {
    return view('livewire.calculator');
  }
  public function calculate()
  {
    $tmp = "{$this->num1}{$this->operator}{$this->num2};";
    $this->result = eval('return ' . $tmp);
  }
  public function add10($prop)
  {
    // $this->authorize('add10', $prop);
    $this->$prop += 10;
  }
  public function delete($userId)
  {
    $this->authorize('delete-user', $userId);
  }

  #[Renderless]
  public function toLogando()
  {
    $this->num2 = 1000;
    Log::info('logando...' . now()->timestamp);
  }
}

// -----
