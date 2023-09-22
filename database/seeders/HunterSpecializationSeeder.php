<?php

namespace Database\Seeders;

use App\Models\SpecializationUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HunterSpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $specializations = [
            [
                'hunter_id' => '1',
                'specialization_id' => '1', 
            ],
            [
                'hunter_id' => '2',
                'specialization_id' => '2', 
            ],
            [
                'hunter_id' => '3',
                'specialization_id' => '3', 
            ],
            [
                'hunter_id' => '4',
                'specialization_id' => '4',
            ],
            [
                'hunter_id' => '4',
                'specialization_id' => '1',
            ],
            [
                'hunter_id' => '5',
                'specialization_id' => '4', 
            ],
            [
                'hunter_id' => '6',
                'specialization_id' => '5', 
            ],
            [
                'hunter_id' => '7',
                'specialization_id' => '1',
            ],
            [
                'hunter_id' => '7',
                'specialization_id' => '4',
            ],
            [
                'hunter_id' => '8',
                'specialization_id' => '6', 
            ],
            [
                'hunter_id' => '8',
                'specialization_id' => '4',
            ],
            [
                'hunter_id' => '8',
                'specialization_id' => '7',
            ],
            [
                'hunter_id' => '8',
                'specialization_id' => '8', 
            ],
            [
                'hunter_id' => '9',
                'specialization_id' => '6',
            ],
            [
                'hunter_id' => '9',
                'specialization_id' =>'4',
            ],
            [
                'hunter_id' => '9',
                'specialization_id' => '7',
            ],
            [
                'hunter_id' => '9',
                'specialization_id' => '8', 
            ],
            [
                'hunter_id' => '10',
                'specialization_id' => '9',
            ],
            [
                'hunter_id' => '10',
                'specialization_id' => '4',
            ],
            [
                'hunter_id' => '11',
                'specialization_id' => '2', 
            ],
            [
                'hunter_id' => '12',
                'specialization_id' => '10', 
            ],
            [
                'hunter_id' => '13',
                'specialization_id' => '3', 
            ],
            [
                'hunter_id' => '14',
                'specialization_id' => '11', 
            ],
            [
                'hunter_id' => '15',
                'specialization_id' => '4', 
            ],
            [
                'hunter_id' => '15',
                'specialization_id' => '2',
            ],
            [
                'hunter_id' => '16',
                'specialization_id' => '9',
            ],
            [
                'hunter_id' => '16',
                'specialization_id' => '6',
            ],
            [
                'hunter_id' => '17',
                'specialization_id' => '7', 
            ],
            [
                'hunter_id' => '18',
                'specialization_id' => '9',
            ],
            [
                'hunter_id' => '18',
                'specialization_id' => '12',
            ],
            [
                'hunter_id' => '18',
                'specialization_id' => '6'
            ],
            [
                'hunter_id' => '19',
                'specialization_id' => '13',
            ],
            [
                'hunter_id' => '19',
                'specialization_id' => '14',
            ],
            [
                'hunter_id' => '19',
                'specialization_id' => '6',
            ],
            [
                'hunter_id' => '20',
                'specialization_id' => '8',
            ],
            [
                'hunter_id' => '20',
                'specialization_id' => '15',
            ],
            [
                'hunter_id' => '20',
                'specialization_id' => '7',
            ],
            [
                'hunter_id' => '20',
                'specialization_id' => '1', 
            ],
            [
                'hunter_id' => '21',
                'specialization_id' =>  '4', 
            ],
            [
                'hunter_id' => '21',
                'specialization_id' => '16',
            ],
            [
                'hunter_id' => '21',
                'specialization_id' => '6',
            ],
            [
                'hunter_id' => '22',
                'specialization_id' => '17',
            ],
            [
                'hunter_id' => '22',
                'specialization_id' => '18',
            ],
            [
                'hunter_id' => '22',
                'specialization_id' => '19',
            ],
            [
                'hunter_id' => '23',
                'specialization_id' => '19',
            ],
            [
                'hunter_id' => '23',
                'specialization_id' => '20', 
            ],
            [
                'hunter_id' => '24',
                'specialization_id' => '1', 
            ],
            [
                'hunter_id' => '24',
                'specialization_id' => '16',
            ],
            [
                'hunter_id' => '24',
                'specialization_id' => '4',
            ],
            [
                'hunter_id' => '25',
                'specialization_id' => '15',
            ],
            [
                'hunter_id' => '25',
                'specialization_id' => '9',
            ],
            [
                'hunter_id' => '25',
                'specialization_id' => '7',
            ],
            [
                'hunter_id' => '26',
                'specialization_id' => '18', 
            ],
            [
                'hunter_id' => '26',
                'specialization_id' => '20',
            ],
            [
                'hunter_id' => '26',
                'specialization_id' => '19',
            ],
            [
                'hunter_id' => '26',
                'specialization_id' => '7',
            ],
            [
                'hunter_id' => '27',
                'specialization_id' => '2',
            ],
            [
                'hunter_id' => '27',
                'specialization_id' =>'21',
            ],
            [
                'hunter_id' => '27',
                'specialization_id' => '3' 
            ],
            [
                'hunter_id' => '28',
                'specialization_id' => '8',
            ],
            [
                'hunter_id' => '28',
                'specialization_id' => '6',
            ],
            [
                'hunter_id' => '29',
                'specialization_id' => '1',
            ],
            [
                'hunter_id' => '29',
                'specialization_id' => '13', 
            ],
            [
                'hunter_id' => '30',
                'specialization_id' => '18', 
            ],
            [
                'hunter_id' => '30',
                'specialization_id' => '17',
            ],
            [
                'hunter_id' => '31',
                'specialization_id' => '20',
            ],
            [
                'hunter_id' => '31',
                'specialization_id' => '14',
            ],
            [
                'hunter_id' => '32',
                'specialization_id' => '13', 
            ],
            [
                'hunter_id' => '32',
                'specialization_id' => '10', 
            ],
            [
                'hunter_id' => '33',
                'specialization_id' => '2',
            ],
            [
                'hunter_id' => '33',
                'specialization_id' => '3', 
            ],
            [
                'hunter_id' => '34',
                'specialization_id' => '2',
            ],
            [
                'hunter_id' => '34',
                'specialization_id' => '21',
            ],
            [
                'hunter_id' => '35',
                'specialization_id' => '11',
            ],
            [
                'hunter_id' => '35',
                'specialization_id' => '21', 
            ],
            [
                'hunter_id' => '36',
                'specialization_id' => '4',
            ],
            [
                'hunter_id' => '36',
                'specialization_id' => '2', 
            ],
            [
                'hunter_id' => '37',
                'specialization_id' => '7',
            ],
            [
                'hunter_id' => '37',
                'specialization_id' => '9',
            ],
        ];

        foreach ($specializations as $specializationuser){
            $newSpecialization = new SpecializationUser();
            $newSpecialization->hunter_id=$specializationuser['hunter_id'];
            $newSpecialization->specialization_id=$specializationuser['specialization_id'];
            $newSpecialization->save();
        }
    }
}
