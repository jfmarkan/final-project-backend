<?php

namespace Database\Seeders;

use App\Models\Sponsorship;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SponsorshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sponsorshipsDetails = [
            [
                "name" => 'Single Day Sub',
                "price" => '2.99',
                "duration" => '24',
            ],[
                "name" => 'Three Day Sub',
                "price" => '5.99',
                "duration" => '72',
            ],[
                "name" => 'Six Day Sub',
                "price" => '9.99',
                "duration" => '144',
            ]
        ];

        foreach ($sponsorshipsDetails as $sponsorship) {
            $newSponsorship = new Sponsorship();
            $newSponsorship->name = $sponsorship['name'];
            $newSponsorship->price = $sponsorship['price'];
            $newSponsorship->duration = $sponsorship['duration'];
            $newSponsorship->save();
        }
    }
}
