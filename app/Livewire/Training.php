<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Training as M_training;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class Training extends Component
{
    // public $isModalOpen = false, $getCategoryId = null;
    public $isUpdate = false;
    public $id, $demam, $sakit_kepala, $mengigil, $berkeringat, $mual, $diagnosa;

    // public function showModal()
    // {
    //     $this->isModalOpen = true;
    // }

    // public function closeModal()
    // {
    //     $this->resetValidation();
    //     $this->resetInputs();
    // }

    private function resetInputs()
    {
        $this->resetValidation();
        
        $this->id = '';
        $this->demam ='';
        $this->sakit_kepala = '';
        $this->mengigil= '';
        $this->berkeringat= '';
        $this->mual= '';
        $this->diagnosa= '';
    }

    public function edit($id)
    {
        $this->isUpdate = true;
        $training = M_training::where('id',$id)->first();
        $this->id = $id;
        $this->demam = $training->demam;
        $this->sakit_kepala = $training->sakit_kepala;
        $this->mengigil = $training->mengigil;
        $this->berkeringat = $training->berkeringat;
        $this->mual = $training->mual;
        $this->diagnosa = $training->diagnosa;
    }

    public function cancel()
    {
        $this->isUpdate = false;
        $this->resetInputs();
    }

    #[Title('Training | Pages')]
    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.training.index', [
            'section' => 'Training',
            'trainigs' => M_training::all(),
        ]);
    }
}
