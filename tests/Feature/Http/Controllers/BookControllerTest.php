<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

/**
 * @see \App\Http\Controllers\BookController
 */
class BookControllerTest extends TestCase
{
    use WithFaker;

    public function test_book_index()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->get('/books');

        $response->assertStatus(200);
    }

    // public function test_book_store()
    // {
    //     $adminRole = \Spatie\Permission\Models\Role::create(['name' => 'admin']);
    //     $readerRole = \Spatie\Permission\Models\Role::create(['name' => 'reader']);

    //      // Autenticar un usuario con los permisos necesarios
    //      $admin = User::factory()->create();
    //      $admin->assignRole('admin');

    //      $this->actingAs($admin);

    //      $bookData = [
    //          'title' => $this->faker->sentence,
    //          'author' => $this->faker->name,
    //          'publisher' => $this->faker->company,
    //          'gender_id' => 1,
    //          'year_published' => $this->faker->year,
    //          'description' => $this->faker->paragraph,
    //          'image' => UploadedFile::fake()->image('cover.jpg'),
    //          'file' => UploadedFile::fake()->create('book.pdf'),
    //      ];

    //      $response = $this->post('/books/store', $bookData);

    //      $this->assertDatabaseHas('books', [
    //          'title' => $bookData['title'],
    //          'author' => $bookData['author'],
    //      ]);


    //      $response->assertRedirect(route('books.index'));

    //      $response->assertSessionHas('success', 'Book created successfully.');
    // }
}
