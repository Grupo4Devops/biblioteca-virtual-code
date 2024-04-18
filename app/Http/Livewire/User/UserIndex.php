<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserIndex extends Component
{
    public $search = "";
    use WithPagination;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $users = User::where('id', 'LIKE', '%' . $this->search . '%')
        ->orWhere('name', 'LIKE', '%' . $this->search . '%')
        ->orWhere('email', 'LIKE', '%' . $this->search . '%')
        ->orWhereHas('roles', function ($query) {
            $query->where('name', 'LIKE', '%' . $this->search . '%');
        })
        ->paginate(10);
    

        return view('livewire.user.user-index', compact('users'));
    }
}
