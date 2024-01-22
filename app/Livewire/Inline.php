<?php

namespace App\Livewire;

use Livewire\Component;

class Inline extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div>
          Inline component
        </div>
        HTML;
    }
}
