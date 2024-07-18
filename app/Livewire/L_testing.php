<?php

namespace App\Livewire;

use App\Models\Testing;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

class L_testing extends Component
{
    #[Title('Testing | Pages')] 
    #[Layout('components.layouts.app')] 
    public function render()
    {
        return view('livewire.testing.index',[
            'section' => 'Testing',
            'testings' => Testing::all(),
        ]);
    }
}
