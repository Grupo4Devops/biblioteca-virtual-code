<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Gender;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('book.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genders = Gender::all();
        return view('book.create', compact('genders'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'gender_id' => 'required',
            'year_published' => 'required',
            'description' => 'required',
            'image' => 'required|image',
            'file' => 'required|mimes:pdf',
        ]);

        //Image
        $imageName = time() . '_' . $request->image->getClientOriginalName();
        $pathImage = $request->image->storeAs('public/images/', $imageName);
        $urlImage = Storage::url($pathImage);

        //File
        $fileName = time() . '_' . $request->file->getClientOriginalName();
        $pathFile = $request->file->storeAs('public/files/', $fileName);
        $urlFile = Storage::url($pathFile);

        $book = new Book();
        $book->title = $request->title;
        $book->author = $request->author;
        $book->publisher = $request->publisher;
        $book->gender_id = $request->gender_id;
        $book->year_published = $request->year_published;
        $book->description = $request->description;
        $book->image = $urlImage;
        $book->file = $urlFile;
        $book->save();


        return redirect()->route('books.index')->with('success', 'Book created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        $books = Book::with('reviews')
            ->select(
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
            ->where('books.id', '=', $book->id)
            ->first();

        $reviews = $book->reviews;

        return view('book.show', compact('books', 'reviews'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {

        $genders = Gender::all();
        $book = Book::select(
            'books.id',
            'books.title',
            'books.author',
            'books.publisher',
            'books.year_published',
            'books.description',
            'books.image',
            'books.file',
            'genders.name as gender_name',
            'genders.id as gender_id'
        )
            ->join('genders', 'genders.id', '=', 'books.gender_id')
            ->where('books.id', '=', $book->id)->first();

        return view('book.edit', compact('book', 'genders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publisher' => 'required',
            'gender_id' => 'required',
            'year_published' => 'required',
            'description' => 'required',
        ]);

        $book->title = $request->title;
        $book->author = $request->author;
        $book->publisher = $request->publisher;
        $book->gender_id = $request->gender_id;
        $book->year_published = $request->year_published;
        $book->description = $request->description;

        if ($request->image != null) {

            $url = str_replace('storage', 'public', $book->image);
            Storage::delete($url);

            //Image
            $imageName = time() . '_' . $request->image->getClientOriginalName();
            $pathImage = $request->image->storeAs('public/images/', $imageName);
            $urlImage = Storage::url($pathImage);
            $book->image = $urlImage;
        }

        if ($request->file != null) {

            $url = str_replace('storage', 'public', $book->file);
            Storage::delete($url);

            //File
            $fileName = time() . '_' . $request->file->getClientOriginalName();
            $pathFile = $request->file->storeAs('public/files/', $fileName);
            $urlFile = Storage::url($pathFile);
            $book->file = $urlFile;
        }

        $book->save();

        return redirect()->route('books.index')->with('success', 'Book updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $url = str_replace('storage', 'public', $book->image);
        Storage::delete($url);

        $url = str_replace('storage', 'public', $book->file);
        Storage::delete($url);

        $reviews = Review::where('book_id', $book->id)->get();

        foreach ($reviews as $review) {
            $review->delete();
        }

        $book->delete();

        return redirect()->route('books.index')->with('success', 'Book deleted successfully.');
    }
}
