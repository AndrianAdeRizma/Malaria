<?php

namespace App\Livewire;

use Livewire\Component;

class L_testing extends Component
{
    public function render()
    {
        return view('livewire.testing.index',[
            'title' => 'Testing',
        ]);
    }
}
