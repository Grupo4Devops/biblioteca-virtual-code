<?php

namespace Tests\Feature\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\GenderController
 */
class GenderControllerTest extends TestCase
{
    use WithFaker;

    public function test_gender_index()
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = $this->get('/genders');

        $response->assertStatus(200);
    }
}
