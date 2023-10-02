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
                "image" => "https://static.wikia.nocookie.net/avp/images/4/48/Ellen_Ripley.png",
                "name" => "Ellen Louise",
                "surname" => "Ripley",
            ],[
                "image" => "https://umbrella-online.co.uk/wiki_files/characters/ada-wong-re2r.png",
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
                "image" => "https://static.tvtropes.org/pmwiki/pub/images/index_character01.jpg",
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
                "image" => "https://deadline.com/wp-content/uploads/2022/09/MCDXMEN_FE105.jpg?w=681&h=383&crop=1",
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
                "image" => "https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/c2c26653-775b-4645-9b06-add91e1a6426/dexe56w-3b45b8c2-7842-4fff-ae8b-fed2ac2945d8.jpg/v1/fill/w_1280,h_1138,q_75,strp/maka_albarn__from_soul_eater__by_niellart_dexe56w-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9MTEzOCIsInBhdGgiOiJcL2ZcL2MyYzI2NjUzLTc3NWItNDY0NS05YjA2LWFkZDkxZTFhNjQyNlwvZGV4ZTU2dy0zYjQ1YjhjMi03ODQyLTRmZmYtYWU4Yi1mZWQyYWMyOTQ1ZDguanBnIiwid2lkdGgiOiI8PTEyODAifV1dLCJhdWQiOlsidXJuOnNlcnZpY2U6aW1hZ2Uub3BlcmF0aW9ucyJdfQ.FEXqeSSiNMtvdRmFEmaGR6mkDQQpJNojdlt397iWCRg",
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
                "image" => "https://i.pinimg.com/236x/13/12/dc/1312dc84bbe4525e2804e929ba0efc3f.jpg",
                "name" => "Seraphina",
                "surname" => "Shadowcaster",
            ],[
                "image" => "https://i.pinimg.com/236x/5a/96/37/5a96378adac9e35b9b48d5de673330ff.jpg",
                "name" => "Draven",
                "surname" => "Fireforge",
            ],[
                "image" => "https://i.pinimg.com/236x/b7/29/ef/b729ef724ac61fbdd004218d9104ead5.jpg",
                "name" => "Siren",
                "surname" => "Songblade",
            ],[
                "image" => "https://i.pinimg.com/236x/ad/91/8e/ad918ee5c4bbe639732e81cded23ceb3.jpg",
                "name" => "Aiko",
                "surname" => "Kitsune",
            ],[
                "image" => "https://i.pinimg.com/236x/15/a2/af/15a2af308888f0cc16667707689e4cb2.jpg",
                "name" => "Thorne",
                "surname" => "Ironclad",
            ],[
                "image" => "https://i.pinimg.com/564x/66/b9/4a/66b94af23b96cbf6ec1c96482f621e9a.jpg",
                "name" => "Nyx",
                "surname" => "Cromanter",
            ],[
                "image" => "https://i.pinimg.com/236x/7a/3a/56/7a3a56f767166a611f2f4274a3ef3264.jpg",
                "name" => "Vega",
                "surname" => "Stardust",
            ],[
                "image" => "https://i.pinimg.com/236x/e5/b3/d0/e5b3d0f735e070223a88955f3e7b98d4.jpg",
                "name" => "Artemis",
                "surname" => "Steelheart",
            ],[
                "image" => "https://i.pinimg.com/236x/f8/6d/05/f86d05bae8fb51e002bf5017debd29bc.jpg",
                "name" => "Orion",
                "surname" => "Voidwalker",
            ],[
                "image" => "https://i.pinimg.com/236x/ed/ef/3d/edef3d13c05811b5b81237907e4058a9.jpg",
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
