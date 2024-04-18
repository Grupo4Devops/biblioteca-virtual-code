<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Taxi Driver',
            'author' => 'Richard Elman, Paul Schrader',
            'publisher' => 'Richard Elman, Paul Schrader',
            'gender_id' => 1,
            'year_published' => 1967,
            'description' => 'El escritor original de Taxi Driver, Paul Schrader, ha expresado de manera enérgica su oposición a la idea de una secuela. Schrader, cuya experiencia personal inspiró la creación de la película, considera que cualquier continuación sería un sacrilegio.',
            'image' => '/storage/images//1690509507_4872cc0cd8c6eeee66f61e98213996e2.jpg',
            'file' => '/storage/files//1690509507_1683827975_NuevaYorkenmovimiento_IVANRINCONBORREGO_Interioresdomesticosyurbanos_Fotograma.pdf'
        ]);

        Book::create([
            'title' => 'Sumergete en los patrones de diseño',
            'author' => 'Alexander Shvets',
            'publisher' => 'Alexander Shvets',
            'gender_id' => 7,
            'year_published' => 2010,
            'description' => 'Los patrones de diseño te ayudan a resolver problemas que ocurren con frecuencia en el diseño de software. Pero no se puede elegir un patrón y copiarlo en el programa como si se tratara de funciones o bibliotecas ya existentes.',
            'image' => '/storage/images//1690509608_1683828253_web-cover-es.png',
            'file' => '/storage/files//1690509608_1683828253_Sumergete_patrones_diseno.pdf'
        ]);

        Book::create([
            'title' => 'Ingles Elemental',
            'author' => 'Leonar Hernández',
            'publisher' => 'Leonar Hernández',
            'gender_id' => 7,
            'year_published' => 2009,
            'description' => 'El nivel A1 corresponde a usuarios básicos con el idioma, es decir, aquellos capaces de comunicarse en situaciones cotidianas con expresiones de uso frecuente y vocabulario elemental.',
            'image' => '/storage/images//1690509725_1683828403_3229374.__RS360x360__.jpg',
            'file' => '/storage/files//1690509725_1683828403_ingles-elemental.pdf'
        ]);

    }
}
