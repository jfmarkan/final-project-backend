<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = [
            [
                'user_id' => 1,
                'vote' => 4,
                'review' => 'Very fast, professional and precise hunter. Just a little racist toward humans'
            ],
            [
                'user_id' => 1,
                'vote' => 3,
                'review' => 'Ok, great hunter, very skilled, but so full of himself. Get a grip, but thanks'
            ],
            [
                'user_id' => 1,
                'vote' => 4,
                'review' => ''
            ],
            [
                'user_id' => 1,
                'vote' => 5,
                'review' => ''
            ],
            [
                'user_id' => 1,
                'vote' => 5,
                'review' => ''
            ],
            [
                'user_id' => 1,
                'vote' => 1,
                'review' => ''
            ],
            [
                'user_id' => 2,
                'vote' => 5,
                'review' => 'Thank you! After your intervention I can move as I\'ve never got nested by a chestbuster!'
            ],
            [
                'user_id' => 2,
                'vote' => 4,
                'review' => 'Super caparble hunter, very brave. Thank you!'
            ],
            [
                'user_id' => 2,
                'vote' => 5,
                'review' => 'The only person I want to have with me in a spaceship or on a foreign planet!'
            ],
            [
                'user_id' => 2,
                'vote' => 5,
                'review' => ''
            ],
            [
                'user_id' => 3,
                'vote' => 2,
                'review' => 'Please stop your defamatory campaign against my client Umbrella Corp.'
            ],
            [
                'user_id' => 3,
                'vote' => 4,
                'review' => ''
            ],
            [
                'user_id' => 3,
                'vote' => 4,
                'review' => ''
            ],
            [
                'user_id' => 3,
                'vote' => 3,
                'review' => ''
            ],
            [
                'user_id' => 3,
                'vote' => 5,
                'review' => ''
            ],
            [
                'user_id' => 3,
                'vote' => 5,
                'review' => ''
            ],
        ];
    }
}
