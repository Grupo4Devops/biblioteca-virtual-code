<?php

namespace App\Http\Livewire\Book;

use App\Models\Book;
use Livewire\Component;
use Livewire\WithPagination;

class BookIndex extends Component
{

    public $search = "";
    use WithPagination;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $books = Book::select('books.id', 'books.title', 'books.author', 
        'books.publisher', 'books.year_published', 'books.description', 
        'books.image', 'genders.name as gender_name')
        ->join('genders', 'genders.id', '=', 'books.gender_id')
        ->where('books.id', 'LIKE' , '%' . $this->search . '%')
        ->orwhere('books.title','LIKE' , '%' . $this->search . '%')
        ->orwhere('books.author','LIKE' , '%' . $this->search . '%')
        ->orwhere('books.publisher','LIKE' , '%' . $this->search . '%')
        ->orwhere('books.year_published','LIKE' , '%' . $this->search . '%')
        ->orwhere('books.description','LIKE' , '%' . $this->search . '%')
        ->orwhere('genders.name','LIKE' , '%' . $this->search . '%')->paginate(6);

        return view('livewire..book.book-index', compact('books'));
    }
}
