<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Guest;
use Illuminate\Support\Facades\DB;

class ConfirmationCode extends Component
{
    public $code;
    public $codigos;
    public $guest;
    public $respuesta;
    public $asistentes;
    public $deseos;
    public $mostrarGracias = false;

    public function confirmar($id) {
        $guest = Guest::find($id);
        $guest->response = $this->respuesta;
        $guest->assistants = $this->asistentes;
        $guest->confirmado = true;
        $guest->desires = $this->deseos;
        $guest->save();
        $this->mostrarGracias = true;
    }

    public function render()
    {
        $this->codigos = DB::table('guests')->pluck('codigo');
        $this->guest = Guest::where('codigo', $this->code)->first();
        return view('livewire.confirmation-code');
    }
}
