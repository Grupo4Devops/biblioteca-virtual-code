<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('user', App\Http\Controllers\UserController::class);


    Route::get('/books', [BookController::class, 'index'])->name('books.index');
    Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
    Route::post('/books/store', [BookController::class, 'store'])->name('books.store');
    Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');
    Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
    Route::post('/books/{book}/update', [BookController::class, 'update'])->name('books.update');
    Route::post('/books/{book}/destroy', [BookController::class, 'destroy'])->name('books.destroy');
    Route::post('/books/{book_id}/reviews', [App\Http\Controllers\ReviewController::class, 'store'])->name('reviews.store');


    Route::resource('review', App\Http\Controllers\ReviewController::class);

    Route::resource('view', App\Http\Controllers\ViewController::class);

    Route::get('/genders', [GenderController::class, 'index'])->name('genders.index');
    Route::get('/genders/create', [GenderController::class, 'create'])->name('genders.create');
    Route::post('/genders/store', [GenderController::class, 'store'])->name('genders.store');
    Route::get('/genders/{gender}', [GenderController::class, 'show'])->name('genders.show');
    Route::get('/genders/{gender}/edit', [GenderController::class, 'edit'])->name('genders.edit');
    Route::post('/genders/{gender}/update', [GenderController::class, 'update'])->name('genders.update');
    Route::post('/genders/{gender}/destroy', [GenderController::class, 'destroy'])->name('genders.destroy');

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users/store', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::post('/users/{user}/update', [UserController::class, 'update'])->name('users.update');
    Route::post('/users/{user}/destroy', [UserController::class, 'destroy'])->name('users.destroy');
});
