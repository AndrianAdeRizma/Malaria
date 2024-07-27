<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use App\Models\Training as M_training;

class Training extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $isModalOpen = false;
    public $isUpdate = false;
    public $id, $demam, $sakit_kepala, $mengigil, $berkeringat, $mual, $diagnosa;
    // public $selected = '';

    protected $messages = [
        'demam.required' => 'field wajib diisi!',
        'sakit_kepala.required' => 'field wajib diisi!',
        'mengigil.required' => 'field wajib diisi!',
        'berkeringat.required' => 'field wajib diisi!',
        'mual.required' => 'field wajib diisi!',
        'diagnosa.required' => 'field wajib diisi!',
    ];
    public function showModal()
    {
        $this->isModalOpen = true;
    }

    public function closeModal()
    {
        $this->resetValidation();
        $this->resetInputs();
    }

    // function mount(){
    //     $training = M_training::first();
    //     // $this->id = $id;
    //     $this->demam = $training->demam;
    //     $this->sakit_kepala = $training->sakit_kepala;
    //     $this->mengigil = $training->mengigil;
    //     $this->berkeringat = $training->berkeringat;
    //     $this->mual = $training->mual;
    //     $this->diagnosa = $training->diagnosa;
    // }

    public function resetInputs()
    {
        $this->resetValidation();
        $this->reset();

        $this->id = '';
        $this->demam = '';
        $this->sakit_kepala = '';
        $this->mengigil = '';
        $this->berkeringat = '';
        $this->mual = '';
        $this->diagnosa = '';
    }

    public function edit($id)
    {
        $this->isUpdate = true;
        $training = M_training::findOrFail($id);
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

    private function rules()
    {
    }

    public function store()
    {
        $validated = $this->validate([
            'demam' => 'required',
            'sakit_kepala' => 'required',
            'mengigil' => 'required',
            'berkeringat' => 'required',
            'mual' => 'required',
            'diagnosa' => 'required',
        ]);

        M_training::updateOrCreate(
            ['id' => $this->id],
            [
                'demam' => $this->demam,
                'sakit_kepala' => $this->sakit_kepala,
                'mengigil' => $this->mengigil,
                'berkeringat' => $this->berkeringat,
                'mual' => $this->mual,
                'diagnosa' => $this->diagnosa,
            ],
        );

        // $this->dispatch('close-modal');

        if ($this->isUpdate == false) {
            $this->dispatch('swallAlert', [
                'title' => 'inserted field successfully',
                'icon' => 'success',
            ]);
        } elseif($this->isUpdate == true) {
            $this->dispatch('swallAlert', [
                'title' => 'updated field successfully',
                'icon' => 'success',
            ]);
        }else{
            $this->dispatch('swallAlert', [
                'title' => 'Something went wrong!',
                'icon' => 'error',
            ]);
        }

        $this->isUpdate = false;
        $this->resetInputs();
    }

    #[On('delete')]
    public function delete($id = null)
    {
        $category = M_training::find($id);

        $category->delete();

        $this->dispatch('swallAlert', [
            'title' => 'deleted successfully',
            'icon' => 'success',
        ]);

        $this->resetInputs();
    }

    #[Title('Training | Pages')]
    #[Layout('components.layouts.app')]
    public function render()
    {
        return view('livewire.training.index', [
            'section' => 'Training',
            'trainings' => M_training::paginate(5),
        ]);
    }
}
