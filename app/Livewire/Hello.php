<?php

namespace App\Livewire;

use Livewire\Component;

class Hello extends Component
{
    public function render()
    {
        return view('livewire.hello', ["phrase" => "Hello, World! I'm running on Taylor Otwell pocket xD"]);
    }
}
