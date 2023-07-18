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

    public function confirmar($id) {
        $guest = Guest::find($id);
        dd($this->respuesta, $this->asistentes);
    }

    public function render()
    {
        $this->codigos = DB::table('guests')->pluck('codigo');
        $this->guest = Guest::where('codigo', $this->code)->first();
        return view('livewire.confirmation-code');
    }
}
