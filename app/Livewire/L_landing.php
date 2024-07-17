<?php

namespace App\Livewire;

use Livewire\Component;

class L_landing extends Component
{
    public function render()
    {
        return view('livewire.landing.index',[
            'title' => 'Dashboard | Pages',
        ]);
    }
}
