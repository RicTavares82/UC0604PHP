<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'title' => 'Harry Potter',
            'director' => 'John Doe',
            'year' => 2000,
            'duration' => 60,
            'genre_id' => 2,
        ]);

        Movie::create([
            'title' => 'Blade Runner',
            'director' => 'Ridley Scott',
            'year' => 1982,
            'duration' => 80,
            'genre_id' => 1,
        ]);

        Movie::create([
            'title' => 'Iron Man',
            'director' => 'Vitor Custódio',
            'year' => 2008,
            'duration' => 90,
            'genre_id' => 1,
        ]);

        $action=Genre::where('name','Action')->first();
        $action->movies()->create([
            'title' => 'Action movie example',
            'director' => 'Vitor Custódio',
            'year' => 2009,
            'duration' => 95,
        ]);

    }
}
