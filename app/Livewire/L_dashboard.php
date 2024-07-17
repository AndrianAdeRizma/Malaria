<?php

namespace App\Livewire;

use Livewire\Component;

class L_dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard.index',[
            'title' => 'Dashboard | Pages',
        ]);
    }
}
