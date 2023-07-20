<div>
    <div class="mb-4 flex justify-between gap-1">
        <x-input class="grow" name="nombre" type="text" wire:model="search" placeholder="Ingrese texto a buscar..." />
        @livewire('create-guest')
        @livewire('edit-guest')
    </div>

    @if (count($guests) > 0)
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="cursor-pointer px-6 py-3" wire:click="order('codigo')">
                        Código
                        @if ($sort == 'codigo')
                            @if ($direction == 'asc')
                                <i class="fas fa-sort-alpha-up-alt float-right"></i>
                            @else
                                <i class="fas fa-sort-alpha-down-alt float-right"></i>
                            @endif
                        @else
                            <i class="fas fa-sort float-right"></i>
                        @endif
                    </th>
                    <th scope="col" class="cursor-pointer px-6 py-3" wire:click="order('nombre')">
                        Nombre
                        @if ($sort == 'nombre')
                            @if ($direction == 'asc')
                                <i class="fas fa-sort-alpha-up-alt float-right"></i>
                            @else
                                <i class="fas fa-sort-alpha-down-alt float-right"></i>
                            @endif
                        @else
                            <i class="fas fa-sort float-right"></i>
                        @endif
                    </th>
                    <th scope="col" class="cursor-pointer px-6 py-3" wire:click="order('pases')">
                        Cantidad de Pases
                        @if ($sort == 'pases')
                            @if ($direction == 'asc')
                                <i class="fas fa-sort-alpha-up-alt float-right"></i>
                            @else
                                <i class="fas fa-sort-alpha-down-alt float-right"></i>
                            @endif
                        @else
                            <i class="fas fa-sort float-right"></i>
                        @endif
                    </th>
                    <th scope="col" class="cursor-pointer px-6 py-3" wire:click="order('confirmado')">
                        Confirmación
                        @if ($sort == 'confirmado')
                            @if ($direction == 'asc')
                                <i class="fas fa-sort-alpha-up-alt float-right"></i>
                            @else
                                <i class="fas fa-sort-alpha-down-alt float-right"></i>
                            @endif
                        @else
                            <i class="fas fa-sort float-right"></i>
                        @endif
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($guests as $guest)
                    <tr class="bg-white border-b">
                        <td class="px-6 py-4">
                            {{ $guest->codigo }}
                        </td>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $guest->nombre }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $guest->pases }}
                        </td>
                        <td class="px-6 py-4">
                            {{-- {{ $guest->confirmado == false ? 'sin confirmar' : 'confirmado' }} --}}
                            @if ($guest->confirmado == false)
                                sin confirmar
                            @else
                                @if ($guest->response == 'afirmativa')
                                    @if ($guest->pases > 1)
                                        @if ($guest->assistants > 1)
                                            <span class="text-green-500">allí estaremos {{ $guest->assistants }} personas</span>
                                        @else
                                            <span class="text-green-500">allí estaremos 1 persona</span>
                                        @endif
                                    @else
                                        <span class="text-green-500">allí estaré</span>
                                    @endif
                                @else
                                    <span class="text-red-500">no podré asistir</span>
                                @endif
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <span wire:click="$emitTo('edit-guest', 'edit', {{ $guest->id }})" href="#"><i
                                    class="fa-solid fa-pen-to-square text-blue-600 mr-2 cursor-pointer fa-lg"></i></span>
                            <span wire:click="$emit('deletePost', {{ $guest->id }})" href="#"><i
                                    class="fa-solid fa-trash fa-lg text-red-600 cursor-pointer"></i></span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="mt-8 text-neutral-700">No se encontraron invitados</p>
    @endif

    @if ($guests->hasPages())
        <div class="px-4 py-2">
            {{ $guests->links() }}
        </div>
    @endif


</div>
