<?php

namespace App\Http\Livewire\Gender;

use App\Models\Gender;
use Livewire\Component;
use Livewire\WithPagination;

class GenderIndex extends Component
{
    public $search = "";
    use WithPagination;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $genders = Gender::where('name','LIKE' , '%' . $this->search . '%')->paginate(10);

        return view('livewire..gender.gender-index', compact('genders'));
    }
}
