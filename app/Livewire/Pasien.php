<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Pasien as M_pasien;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

class Pasien extends Component
{
    #[Title('Pasien | Pages')] 
    #[Layout('components.layouts.app')] 
    public function render()
    {
        return view('livewire.pasien.index',[
            'section' => 'Pasien',
            'pasiens' => M_pasien::all(),
        ]);
    }
}