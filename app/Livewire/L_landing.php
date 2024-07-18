<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

class L_landing extends Component
{
    #[Title('Landing | Pages')]
    #[Layout('components.layouts.landing')] 
    public function render()
    {
        return view('livewire.public.index',[
            'title' => 'Dashboard | Pages',
        ]);
    }
}
