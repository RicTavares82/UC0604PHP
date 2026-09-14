<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'Leonardo Dicaprio',
            'birth_date' => '1982-03-01',
        ]);
        Author::create([
            'name' => 'Sean Conery',
            'birth_date' => '1950-02-15',
        ]);
        Author::create([
            'name' => 'Rita blanco',
            'birth_date' => '1944-04-09',
        ]);
        Author::create([
            'name' => 'Tom Cruise',
            'birth_date' => '1960-12-09',
        ]);
    }
}
