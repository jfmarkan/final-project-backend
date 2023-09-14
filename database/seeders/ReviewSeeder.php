<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Http\Models\Review;
use Faker\Generator as Faker;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
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
                'user_id' => 4,
                'vote' => 4,
                'review' => 'Give back my loot, you thief!'
            ],
            [
                'user_id' => 4,
                'vote' => 1,
                'review' => 'I saw you robbing my wife. Our town is coming for you, you punk!'
            ],
            [
                'user_id' => 4,
                'vote' => 1,
                'review' => 'Best dragonslayer ever! Next time please keep you fus-ro-dah quieter, our neighbour was complaining'
            ],
            [
                'user_id' => 4,
                'vote' => 3,
                'review' => 'Hey, I\'m the merchant from yesterday. I recounted my gold coins and I\' not sure you paid me correctly.'
            ],
            [
                'user_id' => 4,
                'vote' => 2,
                'review' => ''
            ],
            [
                'user_id' => 4,
                'vote' => 1,
                'review' => ''
            ],
            [
                'user_id' => 4,
                'vote' => 5,
                'review' => ''
            ],
            [
                'user_id' => 4,
                'vote' => 5,
                'review' => ''
            ],
            [
                'user_id' => 4,
                'vote' => 2,
                'review' => ''
            ],
            [
                'user_id' => 5,
                'vote' => 4,
                'review' => 'Basically, a goddess'
            ],
            [
                'user_id' => 5,
                'vote' => 5,
                'review' => 'Almost killed me with the charkram, but looking her fight was worth it'
            ],
            [
                'user_id' => 5,
                'vote' => 5,
                'review' => 'Better than Hercules.'
            ],
            [
                'user_id' => 5,
                'vote' => 5,
                'review' => 'Stronger than a god'
            ],
            [
                'user_id' => 5,
                'vote' => 4,
                'review' => 'Saved my entire village. We\'ll wait for you to come back any time.'
            ],
            [
                'user_id' => 5,
                'vote' => 5,
                'review' => 'Thank you for saving us from big hydra! My head still hurts from your scream, but was awesome!'
            ],
            [
                'user_id' => 5,
                'vote' => 3,
                'review' => ''
            ],
            [
                'user_id' => 5,
                'vote' => 5,
                'review' => ''
            ],
            [
                'user_id' => 5,
                'vote' => 5,
                'review' => ''
            ],
            [
                'user_id' => 6,
                'vote' => 3,
                'review' => 'His quick reflexes saved us numerous times. We decided to mentin you in our paper.'
            ],
            [
                'user_id' => 6,
                'vote' => 4,
                'review' => ''
            ],
            [
                'user_id' => 6,
                'vote' => 4,
                'review' => ''
            ],
            [
                'user_id' => 6,
                'vote' => 5,
                'review' => ''
            ],
            [
                'user_id' => 6,
                'vote' => 3,
                'review' => ''
            ],
            [
                'user_id' => 7,
                'vote' => 4,
                'review' => 'At the start I thought they were too young, but they proved me wrong. Thank you for helping me and protecting myu city!'
            ],
            [
                'user_id' => 7,
                'vote' => 5,
                'review' => 'Small twin but great bravery.'
            ],
            [
                'user_id' => 7,
                'vote' => 5,
                'review' => 'Two of best riders ever seen. I improved a lot thanks to them!'
            ],
        ];
        foreach ($reviews as $review) {
            $newReview = new Review();
            $newReview->user_id = $review['user_id'];
            $newReview->name = $faker->firstName();
            $newReview->surname = $faker->lastName();
            $newReview->vote = $review['vote'];
            $newReview->review = $review['review'];
            $newReview->save();
        }
    }
}
