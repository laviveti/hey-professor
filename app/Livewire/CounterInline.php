<?php

namespace App\Livewire;

use Livewire\Component;

class CounterInline extends Component
{
    public int $specialNumber = 1;

    public function render()
    {
        return <<<'HTML'
        <div>
            Hello, from inline!!
            <br>

            Special Number: {{ $specialNumber }}
        </div>
        HTML;
    }
}
