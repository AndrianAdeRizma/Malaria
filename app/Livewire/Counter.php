<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $emit;
    protected $listeners = ['triggerCreate'];

    public function render()
    {
        return view('livewire.counter');
    }
}
