<?php

namespace App\Livewire;

use Livewire\Component;

class L_pasien extends Component
{
    public function render()
    {
        return view('livewire.pasien.index',[
            'title' => 'Pasien',
        ]);
    }
}
