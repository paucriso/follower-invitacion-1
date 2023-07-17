<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Guest;


class EditGuest extends Component
{
    protected $listeners = ['edit'];
    public $openModal = false;
    public $nombre, $pases, $guest;

    public function edit($id) {
        $this->openModal = true;
        $this->guest = Guest::find($id);
        $this->nombre = $this->guest->nombre;
        $this->pases = $this->guest->pases;
    }

    public function update() {
        $this->guest->nombre = $this->nombre;
        $this->guest->pases = $this->pases;
        $this->guest->save();
        $this->openModal = false;
        $this->emitTo('list-guests', 'render');
        $this->emit('exito', 'Invitado actualizado con éxito');
    }

    public function render()
    {
        return view('livewire.edit-guest');
    }
}
