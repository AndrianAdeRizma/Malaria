<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class L_dashboard extends Component
{
    #[Title('Dashboard | Pages')] 
    #[Layout('layouts.app')] 
    public function render()
    {
        return view('livewire.dashboard.index',[
           
        ]);
    }
}
