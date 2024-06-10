<?php

namespace Database\Seeders;

use App\Models\Review;
use App\Models\Movie;
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
            'id' => 1,
            'movie_id' => '1',
            'user' => '@luciyagatha',
            'rating' => '4/10',
            'date' => '14/05/2024'
        ]);

        Review::create([
            'id' => 2,
            'movie_id' => '2',
            'user' => '@ciyawnzz',
            'rating' => '8/10',
            'date' => '15/05/2024'
        ]);

        Review::create([
            'id' => 3,
            'movie_id' => '3',
            'user' => '@hanasou',
            'rating' => '6/10',
            'date' => '16/05/2024'
        ]);

        Review::create([
            'id' => 4,
            'movie_id' => '4',
            'user' => '@cittlesnowhite',
            'rating' => '10/10',
            'date' => '17/05/2024'
        ]);

        Review::create([
            'id' => 5,
            'movie_id' => '5',
            'user' => '@ciyaw.page',
            'rating' => '7/10',
            'date' => '18/05/2024'
        ]);
    }
}
