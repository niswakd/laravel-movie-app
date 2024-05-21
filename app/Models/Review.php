<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'id' => 1,
            'movie' => 'Jojo Bizarre Adventure',
            'user' => '@luciyagatha',
            'rating' => '4/10',
            'date' => '14/05/2024',
        ],

        [
            'id' => 2,
            'movie' => 'Noragami',
            'user' => '@ciyawnzz',
            'rating' => '8/10',
            'date' => '15/05/2024',
        ],

        [
            'id' => 3,
            'movie' => 'Wind Breaker',
            'user' => '@hanasou',
            'rating' => '6/10',
            'date' => '16/05/2024',
        ],

        [
            'id' => 4,
            'movie' => 'Frieren: Beyond Journeys End',
            'user' => '@cittlesnowhite',
            'rating' => '10/10',
            'date' => '17/05/2024',
        ],

        [
            'id' => 5,
            'movie' => 'Solo Leveling',
            'user' => '@ciyaw.page',
            'rating' => '7/10',
            'date' => '18/05/2024',
        ],
    ];

    public function getAllReviews()
    {
        return $this->reviews;
    }
}
