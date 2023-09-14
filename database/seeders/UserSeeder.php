<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = ['DieDragonsDie@outofmytown.al','xenomorphLover@gmail.sp','UmbrellaCorpTrueEvil@gmail.com','Fus@ro.dah','GarbielleNotOlimpia@gmail.gr','notEven2000@old.sigh','LiterallyMonsterHunter@hunt.com','DeanWinchesterHunter@yahoo.com','SamWinchesterHunter@yahoo.com','VanHelsingVampireHunter@gmail.com','KeiKuronoGantzHunter@gmail.com','LoganMutantHunter@gmail.com','RickZombieHunter@gmail.com','T800Cyberdyne@gmail.com','ShinichiHunter@gmail.com','DanteDemonHunter@gmail.com','MakaSoulEater@gmail.com','elara.thornshade@yahoo.com','thorne.ironheart@yahoo.com','seraphina.lightwing@yahoo.com','kael.shadowclaw@yahoo.com','nerida.deepsea@yahoo.com','orion.blackthorn@yahoo.com','anansi.weaver@yahoo.com','maya.sunwalker@yahoo.com','kai.stormrider@yahoo.com','orion.starfire@yahoo.com','seraphinashadow@gmail.com','dravenfireforge@gmail.com','sirensongblade@gmail.com','aikokitsune@gmail.com','thorneironclad@gmail.com','nyxnecromancer@gmail.com','vegastardust@gmail.com','artemissteelheart@gmail.com','orionvoidwalker@gmail.com','lunastarwhisper@gmail.com',];

        foreach ($users as $user){
            $newUser = new User();
            $newUser->email = $user;
            $newUser->password = Hash::make('12345678');
            $newUser->save();
        }
    }
}