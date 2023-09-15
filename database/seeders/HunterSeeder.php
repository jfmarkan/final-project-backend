<?php

namespace Database\Seeders;

use App\Models\Specialization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hunter;

class HunterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $details = [
            [
                "image"=>"https://i.pinimg.com/564x/d6/04/54/d60454e0eb80e5e14926ce7364e3fa8c.jpg",
                "name"=>"Eristelle",
                "surname"=>"Moonfollow",
            ],[
                "image" => "https://en.wikipedia.org/wiki/Ellen_Ripley#/media/File:Ellen_ripley.jpg",
                "name" => "Ellen Louise",
                "surname" => "Ripley",
            ],[
                "image" => "https://static.wikia.nocookie.net/vsbattles/images/7/73/Ada_wong.png/revision/latest?cb=20151125090909",
                "name" => "Ada",
                "surname" => "Wong",
            ],[
                "image" => "https://i.pinimg.com/564x/4a/f3/d0/4af3d09fbe9651904ecdfe6a2839a4f8.jpg",
                "name" => "Dovah-kiin",
                "surname" => "",
            ],[
                "image" => "https://upload.wikimedia.org/wikipedia/it/e/e1/Xena_screen_ultimapuntata.jpg",
                "name" => "Xena",
                "surname" => "",
            ],[
                "image" => "https://www.giantbomb.com/a/uploads/square_medium/46/462814/3181096-7870099274-9cdni.jpg",
                "name" => "Rick",
                "surname" => "O' Connell",
            ],[
                "image" => "https://static.wikia.nocookie.net/monsterhunter/images/7/71/MHST2-Kamura_Garb_Layered_Armor_Render_001.png/revision/latest/scale-to-width-down/250?cb=20210710190217",
                "name" => "Leo and Leia",
                "surname" => "",
            ],[
                "image" => "https://hips.hearstapps.com/hmg-prod/images/supernatural-dean-winchester-1556276848.jpg?crop=0.668xw:1.00xh;0.167xw,0&resize=1200:*",
                "name" => "Dean",
                "surname" => "Winchester",
            ],[
                "image" => "https://i0.wp.com/www.nerdsandbeyond.com/wp-content/uploads/2019/09/image.jpeg?ssl=1",
                "name" => "Sam",
                "surname" => "Winchester",
            ],[
                "image" => "https://www.justnerd.it/wp-content/uploads/2020/12/Hugh-Jackman-Van-Helsing.jpg",
                "name" => "Abraham",
                "surname" => "Van Helsing",
            ],[
                "image" => "https://2.bp.blogspot.com/_SeMtdvGs9ZA/TQVvWfR9NrI/AAAAAAAABm4/AnDE0wDTCok/s1600/4.jpg",
                "name" => "Kei",
                "surname" => "Kurono",
            ],[
                "image" => "https://static.wikia.nocookie.net/virtualarena/images/e/e2/Wolverinewikia.jpg/revision/latest?cb=20110401140355&path-prefix=it",
                "name" => "Logan",
                "surname" => "Wolverine",
            ],[
                "image" => "https://images6.alphacoders.com/318/318730.jpg",
                "name" => "Rick",
                "surname" => "Grimes",
            ],[
                "image" => "https://media.posterlounge.com/img/products/610000/605807/605807_poster.jpg",
                "name" => "T-800",
                "surname" => "Model 101",
            ],[
                "image" => "https://m.media-amazon.com/images/I/61GJ075K5LS._AC_UF1000,1000_QL80_.jpg",
                "name" => "Shinichi",
                "surname" => "Izumi",
            ],[
                "image" => "https://leganerd.com/wp-content/uploads/2022/04/man-ga-annuncia-ritorno-dell-anime-devil-may-cry-stasera-episodio-v3-342518.jpg",
                "name" => "Dante",
                "surname" => "Son Of Sparda",
            ],[
                "image" => "https://static.wikia.nocookie.net/p__/images/9/9e/Maka_Albarn.png/revision/latest?cb=20190621231354&path-prefix=protagonist",
                "name" => "Maka",
                "surname" => "Albarn",
            ],[
                "image" => "https://i.pinimg.com/originals/9e/7d/51/9e7d5179a7de58250178749413b557ae.jpg",
                "name" => "Elara",
                "surname" => "Thornshade",
            ],[
                "image" => "https://i.pinimg.com/originals/ee/19/60/ee1960a713bc2ba70cd0424a16d4af91.jpg",
                "name" => "Thorne",
                "surname" => "Ironheart",
            ],[
                "image" => "https://i.pinimg.com/originals/55/7b/9b/557b9b3fdfec1bd85753c08b06b68cef.jpg",
                "name" => "Seraphina",
                "surname" => "Lightwing",
            ],[
                "image" => "https://i.pinimg.com/originals/be/9f/d3/be9fd3906f900082ce9904dee873c81f.jpg",
                "name" => "Kael",
                "surname" => "Shadowclaw",
            ],[
                "image" => "https://i.pinimg.com/originals/82/fc/d4/82fcd46cbe9d0f285f24b704f73f1a85.jpg",
                "name" => "Nerida",
                "surname" => "Deepsea",
            ],[
                "image" => "https://i.pinimg.com/originals/71/1f/c2/711fc210d3eb3407c76fc8dfeaad81e1.jpg",
                "name" => "Orion",
                "surname" => "Blackthorn",
            ],[
                "image" => "https://i.pinimg.com/originals/80/86/07/808607f275969f44b54e720c95b1d3e8.jpg",
                "name" => "Anansi",
                "surname" => "Weaver",
            ],[
                "image" => "https://i.pinimg.com/originals/c0/48/34/c048345f902a4040ae1e7dc385c18340.jpg",
                "name" => "Maya",
                "surname" => "Sunwalker",
            ],[
                "image" => "https://i.pinimg.com/originals/e3/e0/3a/e3e03a61c55fa8c84efc9f7f054809bb.jpg",
                "name" => "Kai",
                "surname" => "Stormrider",
            ],[
                "image" => "https://i.pinimg.com/originals/c4/80/fc/c480fc5e1c2aab42cb694719cbcf3b27.jpg",
                "name" => "Orion",
                "surname" => "Starfire",
            ],[
                "image" => "",
                "name" => "Seraphina",
                "surname" => "Shadowcaster",
            ],[
                "image" => "",
                "name" => "Draven",
                "surname" => "Fireforge",
            ],[
                "image" => "",
                "name" => "Siren",
                "surname" => "Songblade",
            ],[
                "image" => "",
                "name" => "Aiko",
                "surname" => "Kitsune",
            ],[
                "image" => "",
                "name" => "Thorne",
                "surname" => "Ironclad",
            ],[
                "image" => "",
                "name" => "Nyx",
                "surname" => "Cromanter",
            ],[
                "image" => "",
                "name" => "Vega",
                "surname" => "Stardust",
            ],[
                "image" => "",
                "name" => "Artemis",
                "surname" => "Steelheart",
            ],[
                "image" => "",
                "name" => "Orion",
                "surname" => "Voidwalker",
            ],[
                "image" => "",
                "name" => "Luna",
                "surname" => "Starwhisper",
            ],
        ];

        foreach ($details as $index=>$detail) {
            $newHunter = new Hunter();
            $newHunter->user_id = $index + 1;
            $newHunter->name = $detail['name'];
            $newHunter->image = $detail['image'];
            $newHunter->surname = $detail['surname'];
            $newHunter->save();
        }
    }
}
