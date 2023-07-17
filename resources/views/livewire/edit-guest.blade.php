<div class="flex">
    <x-dialog-modal wire:model="openModal">
        <x-slot name="title">
            Actualizar invitado
        </x-slot>

        <x-slot name="content">
            <div class="flex gap-4">
                <div class="mb-4 grow">
                    <x-label value="Nombre:" />
                    <x-input type="text" class="w-full" wire:model.defer="nombre"  />
                    {{-- @error('nombre')
                        <span class="font-sm text-red-700">
                            {{$message}}
                        </span>
                    @enderror --}}
                </div>
                <div class="mb-4">
                    <x-label value="Cantidad de pases:" />
                    <x-input type="number" min="1" max="20" class="w-full" wire:model.defer="pases" />
                    {{-- @error('pases')
                        <span class="font-sm text-red-700">
                            {{$message}}
                        </span>
                    @enderror --}}
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$set('openModal', false)">
                Cancelar
            </x-secondary-button>
            <x-button class="ml-2" wire:click="update" >
                Actualizar
            </x-button>
        </x-slot>

    </x-dialog-modal>
</div>
