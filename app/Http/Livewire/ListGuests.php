<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Guest;
use Livewire\WithPagination;

class ListGuests extends Component
{
    use WithPagination;
    protected $listeners = ['render', 'delete'];
    public $search = '';
    public $sort = 'id';
    public $direction = 'desc';

    public function delete($id) {
        $guest = Guest::find($id);
        $guest->delete();
    }

    public function order($sort) {
        if($this->sort == $sort) {
            if($this->direction == 'desc') {
                $this->direction = 'asc';
            } else {
                $this->direction = 'desc';
            }
        } else {
            $this->sort = $sort;
            $this->direction = 'asc';
        }
    }

    public function updatingSearch() {
        $this->resetPage();
    }

    public function render()
    {
        $guests = Guest::where('nombre', 'like', '%' . $this->search . '%')
                        ->orderBy($this->sort, $this->direction)
                        ->paginate(10);
        return view('livewire.list-guests', compact('guests'));
    }
}
