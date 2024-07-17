<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Pasien;

class L_pasien extends Component
{
    public function render()
    {
        return view('livewire.pasien.index',[
            'title' => 'Pasien',
            'pasiens' => Pasien::all(),
        ]);
    }
}