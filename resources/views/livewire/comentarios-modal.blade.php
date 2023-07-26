<div>
    <x-dialog-modal wire:model="open">
        <x-slot name="title">
            @empty(!$guest)
                {{ $guest->nombre }}
            @endempty
        </x-slot>
        <x-slot name="content">
            @isset($guest->desires)
                @if ($guest->desires !== null)
                    {{ $guest->desires }}
                @else
                    no hay comentarios aun
                @endif
            @else
                sin comentarios
            @endisset
        </x-slot>
        <x-slot name="footer">
            <x-button wire:click="$set('open', false)">
                Cerrar
            </x-button>
        </x-slot>
    </x-dialog-modal>
</div>
