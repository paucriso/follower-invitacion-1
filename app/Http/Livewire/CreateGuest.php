<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Guest;
use Illuminate\Support\Facades\DB;

class CreateGuest extends Component
{
    public $open = false;
    public $nombre, $pases;
    protected $rules = [
        'nombre' => 'required|unique:guests|min:3|max:100',
        'pases' => 'required|integer|between:1,10'
    ];

    public function save() {
        $this->validate();
        $codigos = DB::table('guests')->pluck('codigo');
        do
            $codigo = 'FM' . rand(100, 999);
        while($codigos->contains($codigo));
        Guest::create([
            'nombre' => $this->nombre,
            'pases' => $this->pases,
            'codigo' => $codigo,
            'confirmado' => false
        ]);
        $this->reset(['open', 'nombre', 'pases']);
        $this->emit('render');
        $this->emit('exito', 'Invitado agregado con éxito');
    }

    public function render()
    {
        return view('livewire.create-guest');
    }
}
