<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Training;

class L_training extends Component
{
    public function render()
    {
        return view('livewire.training.index',[
            'title' => 'Training',
            'trainigs' => Training::all(),
        ]);
    } 
}
