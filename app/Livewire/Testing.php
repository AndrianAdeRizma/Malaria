<?php

namespace App\Livewire;

use App\Models\Testing as M_testing;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

class Testing extends Component
{
    #[Title('Testing | Pages')] 
    #[Layout('components.layouts.app')] 
    public function render()
    {
        return view('livewire.testing.index',[
            'section' => 'Testing',
            'testings' => M_testing::all(),
        ]);
    }
}
