<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class L_landing extends Component
{
    #[Title('Landing | Pages')] 
    public function render()
    {
        return view('livewire.landing.index',[
            'title' => 'Dashboard | Pages',
        ])->layout('components.layouts.landing');
    }
}
