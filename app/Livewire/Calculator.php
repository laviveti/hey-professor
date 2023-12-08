<?php

namespace App\Livewire;

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

    sleep(2);
    $tmp = "{$this->num1}{$this->operator}{$this->num2};";

    $this->result = eval('return ' . $tmp);
  }
  public function add10($prop)
  {
    $this->authorize('add10', $prop);
    $this->$prop += 10;
  }

  public function delete($userId)
  {
    $this->authorize('delete-user', $userId);
  }
}

// -----
