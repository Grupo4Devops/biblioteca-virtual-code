<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\UserController
 */
class UserControllerTest extends TestCase
{
    use WithFaker;

    public function test_book_index()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->get('/users');

        $response->assertStatus(200);
    }

    // public function test_store_user()
    // {

    //     $admin = User::factory()->create();
    //     $admin->assignRole('admin');

    //     $this->actingAs($admin);

    //     $userData = [
    //         'name' => $this->faker->name,
    //         'email' => $this->faker->unique()->safeEmail,
    //         'password' => 'password123',
    //         'role' => 'reader',
    //     ];

    //     $response = $this->post('/users/store', $userData);

    //     $this->assertDatabaseHas('users', [
    //         'name' => $userData['name'],
    //         'email' => $userData['email'],
    //     ]);

    //     $this->assertTrue(User::where('email', $userData['email'])->first()->hasRole('reader'));

    //     $response->assertRedirect(route('users.index'));

    //     $response->assertSessionHas('success', 'User created successfully.');
    // }
}
