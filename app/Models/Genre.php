<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'id' => 1,
            'name' => 'Jojo Bizarre Adventure',
            'description' => 'JoJos Bizarre Adventure is an anime series adapted from a manga by Hirohiko Araki. The anime is known for its unique plot, iconic characters, and distinctive art style. The story follows the adventures of the Joestar family, each member of which has a different superpower known as a "Stand."',
        ],

        [
            'id' => 2,
            'name' => 'Noragami',
            'description' => 'Noragami is an anime adaptation of a manga by Adachitoka. The anime tells the story of Yato, a small god who aspires to become a famous god by having millions of followers. However, for now, he only does odd jobs to raise money and promote himself.',
        ],

        [
            'id' => 3,
            'name' => 'Wind Breaker',
            'description' => 'Wind Breaker is an anime that centers on Haruka Sakura, a high school student known for her bravery and exceptional skills in cycling. As the leader of her schools cycling team, Haruka is determined to face challenges and overcome various obstacles that come her way.',
        ],

        [
            'id' => 4,
            'name' => 'Frieren: Beyond Journeys End',
            'description' => 'Frieren: Beyond Journeys End is an anime adaptation of the manga by Kanehito Yamada and Tsukasa Abe. The story follows Frieren, an elven wizard who was part of a group of heroes who defeated the Demon King and brought peace to the world. However, since elves have a very long lifespan, Frieren sees his human friends begin to age and eventually die one by one.',
        ],

        [
            'id' => 5,
            'name' => 'Solo Leveling',
            'description' => 'Solo Leveling is an anime adaptation of the popular web novel and manhwa by Chugong. The story focuses on Sung Jin-Woo, a lowest-ranked hunter known as "the weakest hunter in the world." Despite being at the lowest level and often risking losing his life in battles against monsters, Jin-Woo remains persistent and never gives up.',
        ],
    ];

    public function getAllGenres()
    {
        return $this->genres;
    }
}
