<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Guest;

class ComentariosModal extends Component
{
    public $open = false;
    public $guest;
    protected $listeners = ['openModal'];

    public function openModal($id) {
        $this->open = true;
        $this->guest = Guest::find($id);
    }

    public function render()
    {
        return view('livewire.comentarios-modal')->with('guest', $this->guest);
    }
}
