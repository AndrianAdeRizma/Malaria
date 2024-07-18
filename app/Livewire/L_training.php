<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Training;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class L_training extends Component
{  
    #[Title('Training | Pages')] 
    #[Layout('components.layouts.app')] 
    public function render()
    {
        return view('livewire.training.index',[
            'section' => 'Training',
            'trainigs' => Training::all(),
        ]);
    } 
}
