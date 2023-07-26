<div>
    <x-input class="w-11/12" onkeyup="this.value = this.value.toUpperCase();" type="text" wire:model="code" />

    @if ($codigos->contains($code))
        <div class="text-lg text-neutral-600">
            <p class="mt-3 mb-2 font-bold text-pink-700">
                Saludos {{ $guest->nombre }}
            </p>
            <p>Dispones de {{ $guest->pases }} pase{{ $guest->pases > 1 ? 's' : '' }}</p>
            <p class="mt-5 mb-3 font-bold">¿Podemos contar {{ $guest->pases > 1 ? 'con ustedes' : 'contigo' }}?</p>
            <div>
                <input wire:model.defer="respuesta" type="radio" name="respuesta" value="afirmativa">
                <label for="afirmativa">¡Por supuesto! allí {{ $guest->pases > 1 ? 'estaremos' : 'estaré' }}</label>
            </div>
            <div>
                <input wire:model.defer="respuesta" type="radio" name="respuesta" value="negativa">
                <label for="negativa">Lamentablemente no {{ $guest->pases > 1 ? 'podremos' : 'podré' }} asistir</label>
            </div>

            @if ($guest->pases > 1)
                <p class="mt-5 mb-3 font-bold">¿Cuántas personas van a asistir?</p>
                <div class="flex justify-center items-center">
                    @for ($i = 0; $i < $guest->pases; $i++)
                        <div class="mr-3 flex items-center justify-center">
                            <input wire:model.defer="asistentes" class="mr-1" type="radio" name="asistentes"
                                value="{{ $i + 1 }}">
                            <label for="asistentes">{{ $i + 1 }}</label>
                        </div>
                    @endfor
                </div>
            @endif
            <p class="mt-5 mb-3 font-bold">Escríbenos una dedicatoria</p>
            <textarea wire:model.defer="deseos"
                class="w-11/12 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                name="dedicatoria" id="dedicatoria" cols="30" rows="10"></textarea>
            <x-button wire:click="confirmar({{ $guest->id }})" :disabled="$mostrarGracias">Enviar Confirmación</x-button>
            @if ($mostrarGracias)
                <div class="mt-4 text-green-500 font-bold font-simonetta text-lg">¡Gracias! Hemos recibido su respuesta.
                </div>
            @endif
        </div>
    @endif

</div>
