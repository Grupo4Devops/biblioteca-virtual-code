<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Gender;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $this->call(RoleSeeder::class);

        User::factory()->create([
            'name' => 'Bianca Romero',
            'email' => 'bianca@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('admin');

        User::factory()->create([
            'name' => 'Edson Sacaca',
            'email' => 'edson@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('reader');

        User::factory()->create([
            'name' => 'Sebastian Padilla',
            'email' => 'sebastian@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('reader');

        User::factory()->create([
            'name' => 'Pedro Characayo',
            'email' => 'pedro@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('reader');

        User::factory()->create([
            'name' => 'Teo Montalvo',
            'email' => 'teo@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('reader');

        $genders = [
            [
                'name' => 'Ficción'
            ],
            [
                'name' => 'Ciencia Ficción'
            ],
            [
                'name' => 'Drama'
            ],
            [
                'name' => 'Comedia'
            ],
            [
                'name' => 'Romance'
            ],
            [
                'name' => 'Misterio'
            ],
            [
                'name' => 'Educación'
            ]
        ];

        foreach ($genders as $gender) {
            Gender::create($gender);
        }

        $this->call(BookSeeder::class);
        $this->call(ReviewSeeder::class);
    }
}
