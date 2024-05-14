<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;
// Clase para reseñar libros
class ReviewController extends Controller
{
    public function store(Request $request, $book_id)
    {
        // Obtener el usuario autenticado
        $user = Auth::user();

        // Validar los datos del formulario
        $validatedData = $request->validate([
            'comment' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);
        
        // Crear una nueva instancia del modelo Review con los datos del formulario y el id del usuario y del libro
        $review = new Review([
            'comment' => $validatedData['comment'],
            'rating' => $validatedData['rating'],
            'date' => date("Y-m-d"),
            'user_id' => $user->id,
            'book_id' => $book_id
        ]);
        
        // Guardar la nueva review en la base de datos
        $review->save();

        //enviar parametro a vista
        $books = Book::select(
            'books.id',
            'books.title',
            'books.author',
            'books.publisher',
            'books.year_published',
            'books.description',
            'books.image',
            'books.file',
            'genders.name as gender_name'
        )
            ->join('genders', 'genders.id', '=', 'books.gender_id')
            ->where('books.id', '=', $book_id)->first();
        
        // Redirigir a la página de detalles del libro con un mensaje de éxito
        return redirect()->route('books.show', ['book' => $books])->with('success', 'La review ha sido guardada con éxito.');
    }
}
