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
        // dd(auth()->user()->email);
        return view('livewire.dashboard.index',[
           
        ]);
    }
}
