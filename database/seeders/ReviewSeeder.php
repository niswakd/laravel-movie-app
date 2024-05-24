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
            'movie' => 'Jojo Bizarre Adventure',
            'user' => '@luciyagatha',
            'rating' => '4/10',
            'date' => '14/05/2024'
        ]);

        Review::create([
            'movie' => 'Noragami',
            'user' => '@ciyawnzz',
            'rating' => '8/10',
            'date' => '15/05/2024'
        ]);

        Review::create([
            'movie' => 'Wind Breaker',
            'user' => '@hanasou',
            'rating' => '6/10',
            'date' => '16/05/2024'
        ]);

        Review::create([
            'movie' => 'Frieren: Beyond Journeys End',
            'user' => '@cittlesnowhite',
            'rating' => '10/10',
            'date' => '17/05/2024'
        ]);

        Review::create([
            'movie' => 'Solo Leveling',
            'user' => '@ciyaw.page',
            'rating' => '7/10',
            'date' => '18/05/2024'
        ]);
    }
}
