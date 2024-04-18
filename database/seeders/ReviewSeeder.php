<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Review::create([
            'comment' => 'Muy buen libro lo recomiendo',
            'rating' => 5,
            'date' => date("Y-m-d"),
            'user_id' => 2,
            'book_id' => 1
        ]);

        Review::create([
            'comment' => 'Me generó pesadillas',
            'rating' => 3,
            'date' => date("Y-m-d"),
            'user_id' => 3,
            'book_id' => 1
        ]);

        Review::create([
            'comment' => 'Me generó pesadillas',
            'rating' => 3,
            'date' => date("Y-m-d"),
            'user_id' => 4,
            'book_id' => 1
        ]);

        Review::create([
            'comment' => 'Me gustó bastante',
            'rating' => 4,
            'date' => date("Y-m-d"),
            'user_id' => 5,
            'book_id' => 1
        ]);

        Review::create([
            'comment' => 'Me ayudó bastante en la programación',
            'rating' => 4,
            'date' => date("Y-m-d"),
            'user_id' => 2,
            'book_id' => 2
        ]);

        Review::create([
            'comment' => 'Me mal libro',
            'rating' => 1,
            'date' => date("Y-m-d"),
            'user_id' => 3,
            'book_id' => 2
        ]);

        Review::create([
            'comment' => 'Falta explicar mas información',
            'rating' => 2,
            'date' => date("Y-m-d"),
            'user_id' => 4,
            'book_id' => 2
        ]);

        Review::create([
            'comment' => 'Regular mi loco',
            'rating' => 3,
            'date' => date("Y-m-d"),
            'user_id' => 5,
            'book_id' => 2
        ]);

        Review::create([
            'comment' => 'Este libro no sirve',
            'rating' => 1,
            'date' => date("Y-m-d"),
            'user_id' => 2,
            'book_id' => 3
        ]);

        Review::create([
            'comment' => 'Pésimo mi gente',
            'rating' => 1,
            'date' => date("Y-m-d"),
            'user_id' => 3,
            'book_id' => 3
        ]);

        Review::create([
            'comment' => 'No aprendí nada',
            'rating' => 2,
            'date' => date("Y-m-d"),
            'user_id' => 4,
            'book_id' => 3
        ]);

        Review::create([
            'comment' => 'Regular para aprender inglés',
            'rating' => 3,
            'date' => date("Y-m-d"),
            'user_id' => 5,
            'book_id' => 3
        ]);
    }
}
