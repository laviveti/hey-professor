<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\Locked;
use Livewire\Component;

class Counter extends Component
{
    public int $counter = 0;
    public string $name = '';
    public string $lastName = '';

    public function count(): void
    {
        $this->counter++;
    }
    public function mount()
    {
        $this->fill([
            'name' => 'Rafael',
            'lastName' => 'Lunardeli'
        ]);
    }
    public function render(): View
    {
        return view('livewire.counter');
    }

    public function refresh()
    {
        $this->reset('name', 'lastName');
    }
}
