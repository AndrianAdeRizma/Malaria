<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Pasien;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
class L_pasien extends Component
{
    #[Title('Pasien | Pages')] 
    #[Layout('components.layouts.app')] 
    public function render()
    {
        return view('livewire.pasien.index',[
            'section' => 'Pasien',
            'pasiens' => Pasien::all(),
        ]);
    }
}