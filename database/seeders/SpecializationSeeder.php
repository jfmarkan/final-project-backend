<?php

namespace Database\Seeders;

use App\Models\Specialization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specializations = [
           'Dragons', 'Aliens', 'Zombie', 'Monsters', 'Mummy', 'Demons', 'Ghost', 'Angels', 'Vampires', 'Mutants', 'Robots', 'Mythical Creatures - Europe', 'Orcs', 'Fairies', 'Mythical Creatures - America', 'Mythical Creatures - Africa', 'Sirens', 'Sea Monsters', 'Mutant', 'Mythical Creatures - Asia', 'Artificial Intelligences'
        ];

        foreach ($specializations as $specialization){
            $newSpecialization = new Specialization();
            $newSpecialization->name= $specialization['name'];
            $newSpecialization->save();
        }
    }
}
