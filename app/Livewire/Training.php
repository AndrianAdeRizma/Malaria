<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Training as M_training;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

class Training extends Component
{
    public $isModalOpen = false, $getCategoryId = null;

    protected $listeners = ['triggerCreate'];

    public function showModal()
    {
        $this->isModalOpen = true;
    }

    public function closeModal()
    {
        $this->resetValidation();
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
