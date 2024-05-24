<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Shounen',
            'description' => 'Shounen is a genre that is more geared towards teenage boys between the ages of 12-18.'
        ]);

        Genre::create([
            'name' => 'Drama',
            'description' => 'Drama is one of the literary genres that etymologically comes from the Greek dran which means to do something.'
        ]);

        Genre::create([
            'name' => 'Action',
            'description' => 'Action refers to a movie genre that features action scenes, such as fights, chases, or explosions.'
        ]);

        Genre::create([
            'name' => 'Horror',
            'description' => 'Horror is a genre with a storyline that intends to scare, shock, and make the audience feel uncomfortable.'
        ]);

        Genre::create([
            'name' => 'Fantasy',
            'description' => 'Fantasy is a genre that deals with fantasy or with something that does not really exist and only exists in the mind or thoughts.'
        ]);
    }
}
