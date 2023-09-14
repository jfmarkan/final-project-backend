<?php

namespace Database\Seeders;

use App\Models\BookingMessage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Date;

class BookingMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $messages = [
            [
                "user_id" => '1',
                "message" => 'Dear fellow brother, we\'re having another issue with a big blue dragon. We can\'t reach you through spell. Hurry',
            ],[
                "user_id" => '1',
                "message" => 'Our town is drestroyed because of a red dragon. Please help us!',
            ],[
                "user_id" => '1',
                "message" => 'Hey, you owe me a elder void dragon skull!',
            ],[
                "user_id" => '1',
                "message" => 'Greetings. Recently a thunder of young green wirmlings are taking over the Reaching Woods.',
            ],[
                "user_id" => '2',
                "message" => 'Xenomorph queen emergency! After coming back from holidays, we found our yard full of xenomorph eggs. Waiting for your answer asap.',
            ],[
                "user_id" => '2',
                "message" => 'Oh my goodness, it\'s inside me! I feel moving something in my stomach, I thinks is aglkaàmrg-.',
            ],[
                "user_id" => '2',
                "message" => 'I\'ve captured a couple of facehuggers. I\'m keeping them in the basement, what am I supposed to do?',
            ],[
                "user_id" => '3',
                "message" => 'Please come back to Raccoon City, the plague is uncontrollable!',
            ],[
                "user_id" => '3',
                "message" => 'A new Tyrant T-103 has been detected. You need to destroy it.',
            ],[
                "user_id" => '3',
                "message" => 'I think I\'ve found the Red Queen. I\'ll wait for you you know where, asap.',
            ],[
                "user_id" => '4',
                "message" => 'Need help to reach Mounth Anthor to get a dragon egg for study',
            ],[
                "user_id" => '4',
                "message" => 'Mirmulnir is back at the Western Watchtower! We need your help!',
            ],[
                "user_id" => '4',
                "message" => 'I giant just kicked away my only horse. Need you to slay the ba***rd',
            ],[
                "user_id" => '4',
                "message" => 'Trolls all over the place! They\'re spreading by the Rift!',
            ],[
                "user_id" => '4',
                "message" => 'I think I saw a Storm Atronach, need help to have confirm and to deal with it.',
            ],[
                "user_id" => '5',
                "message" => 'Ares started a war here in Elafonissi! Pleas stom him!',
            ],[
                "user_id" => '5',
                "message" => 'A clamor of syrens is attacking the boats in the coasts of Aegean sea. Our organization of merchant is ready to pay you as much as you want, we need your help.',
            ],[
                "user_id" => '6',
                "message" => 'Very goodlooking, waiting for a reunion of the cast',
            ],[
                "user_id" => '6',
                "message" => 'Our expedition found the ruin of a sacred city in Saqqara desert. Strange accident are happening everytime we try to esplore the underground rooms. We need your help to reduce the victims.',
            ],[
                "user_id" => '7',
                "message" => 'Need help to tame a new hatched rathalos. Are you available?',
            ],[
                "user_id" => '7',
                "message" => 'I\'ve found some eggs but I\'m not sure if are espinas or fire espinas eggs. Could you help me to recognize it?',
            ],[
                "user_id" => '7',
                "message" => 'Would you like to join my party to get konchu parts and zamite scales?',
            ],[
                "user_id" => '7',
                "message" => 'A brachydios is showing too close to the village. Please hunt it down.',
            ],[
                "user_id" => '8',
                "message" => 'Hey, I need the best demon hunter in town to free us from this evil. Are you available?',
            ],[
                "user_id" => '8',
                "message" => 'I\'ve encountered some powerful demons. We need your help as soon as possible.',
            ],[
                "user_id" => '8',
                "message" => 'Can you handle a case involving a demon possession? It\'s urgent!',
            ],[
                "user_id" => '9',
                "message" => 'Hello, I am in need of a skilled demon hunter to help us combat the forces of evil. Are you available?',
            ],[
                "user_id" => '9',
                "message" => 'I need a skilled demon hunter immediately; the situation is really terrible here.',
            ],[
                "user_id" => '10',
                "message" => 'Looking for a vampire and monster hunter with expertise. Can you help us?',
            ],[
                "user_id" => '10',
                "message" => 'Dracula is awake; we need your help!',
            ],[
                "user_id" => '11',
                "message" => 'Are you the best Alien Hunter?? Can I give you a job?',
            ],[
                "user_id" => '11',
                "message" => 'We\'ve encountered some powerful extraterrestrial creatures. We need your expertise to deal with them.',
            ],[
                "user_id" => '11',
                "message" => 'A new alien threat has emerged. Are you available to protect us once again?',
            ],[
                "user_id" => '12',
                "message" => 'In need of a mutant hunter to deal with superhuman threats. Are you available?',
            ],[
                "user_id" => '12',
                "message" => 'A new mutant threat has emerged. We need your expertise to handle it.',
            ],[
                "user_id" => '13',
                "message" => 'Looking for an experienced zombie hunter to protect our survivors. Are you up for the challenge?',
            ],[
                "user_id" => '13',
                "message" => 'The undead are swarming our compound; we need your leadership and skills.',
            ],[
                "user_id" => '14',
                "message" => 'In need of a cyborg assassin like T-800 for special tasks. Are you available?',
            ],[
                "user_id" => '14',
                "message" => 'A rogue AI has taken control of a military base. We need your expertise to neutralize it.',
            ],[
                "user_id" => '15',
                "message" => 'In need of an expert Parasite hunter to protect us from parasitic aliens. Are you available?',
            ],[
                "user_id" => '15',
                "message" => 'A new wave of parasitic aliens has appeared. We need your help to eradicate them.',
            ],[
                "user_id" => '16',
                "message" => 'In search of a demon hunter like Dante to deal with supernatural threats. Are you available?',
            ],[
                "user_id" => '16',
                "message" => 'We\'ve encountered a powerful demon lord. We need your expertise to banish it back to the underworld.',
            ],[
                "user_id" => '17',
                "message" => 'Looking for a Meister like Maka to partner with a Weapon and hunt evil souls. Are you interested?',
            ],[
                "user_id" => '17',
                "message" => 'A powerful witch has surfaced, and we need your help to stop her dark rituals.',
            ],[
                "user_id" => '18',
                "message" => 'Greetings, dear Fate. We\'re facing a complex situation involving mystical creatures. Can your magic help us?',
            ],[
                "user_id" => '18',
                "message" => 'The balance of our realm is in jeopardy. We require the wisdom of a Fate like you.',
            ],[
                "user_id" => '18',
                "message" => 'We believe your enchantments can aid us. Please, respond as soon as possible.',
            ],[
                "user_id" => '18',
                "message" => 'A swarm of mischievous goblins has invaded our peaceful meadow! We need a brave hero to rid our land of these invaders.',
            ],[
                "user_id" => '18',
                "message" => 'Our peaceful village has been invaded by horrible goblins! We need a brave hero to free our meadow from the invaders.',
            ],[
                "user_id" => '18',
                "message" => 'A pack of menacing werewolves haunts our village under the full moon. We need a skilled lycanthrope hunter to keep us safe.',
            ],[
                "user_id" => '18',
                "message" => 'The magical wards protecting our kingdom are weakening, and we are vulnerable to dark sorcery. We require a powerful mage to reinforce our defenses.',
            ],[
                "user_id" => '19',
                "message" => 'Thorne, we\'ve spotted a group of orcs causing havoc near the village. We need your strength.',
            ],[
                "user_id" => '19',
                "message" => 'The demon infestation is spreading fast. Thorne, we must act quickly to contain it.',
            ],[
                "user_id" => '19',
                "message" => 'Thorne, your reputation as an orc slayer precedes you. Can you help us with a challenging mission?',
            ],[
                "user_id" => '19',
                "message" => 'A tribe of orcs threatens our sacred forest. We seek a valiant warrior willing to protect our land and drive away the orcs.',
            ],[
                "user_id" => '19',
                "message" => 'Dark creatures are emerging from the depths of the forest. We require a monster hunter to put an end to this menace.',
            ],[
                "user_id" => '19',
                "message" => 'A tribe of orcs threatens our sacred forest. We seek a brave warrior willing to protect our land and repel the orcs.',
            ],[
                "user_id" => '19',
                "message" => 'The wood fairies are in danger from a dark curse. We are looking for a wizard or sorceress skilled in healing spells to free them.',
            ],[
                "user_id" => '19',
                "message" => 'The magical wards protecting our kingdom are weakening, and we are vulnerable to dark sorcery. We require a powerful mage to reinforce our defenses.',
            ],[
                "user_id" => '20',
                "message" => 'Seraphina, we are in dire need of divine intervention. An angel\'s guidance can save our souls.',
            ],[
                "user_id" => '20',
                "message" => 'Our city is under siege by otherworldly forces. Seraphina, your angelic powers can turn the tide.',
            ],[
                "user_id" => '20',
                "message" => 'Seraphina, we\'ve encountered celestial mysteries. Can you illuminate our path?',
            ],[
                "user_id" => '20',
                "message" => 'The forest fairies are in peril due to a dark curse. We are searching for a skilled mage proficient in healing spells to set them free.',
            ],[
                "user_id" => '20',
                "message" => 'A dragon is plaguing our land, destroying everything in its path. We beseech a brave hero to slay the beast and restore peace.',
            ],[
                "user_id" => '20',
                "message" => 'A dragon haunts our land, destroying everything it finds. We call upon the help of a brave hero to slay the beast and restore peace.',
            ],[
                "user_id" => '21',
                "message" => 'Kael, we\'ve unearthed a portal to a demonic realm. We need your expertise to close it.',
            ],[
                "user_id" => '21',
                "message" => 'The demons are growing in strength. Kael, we need a demon slayer like you to lead the charge.',
            ],[
                "user_id" => '21',
                "message" => 'Kael, a powerful demon lord has risen. We require your infernal knowledge to defeat it.',
            ],[
                "user_id" => '21',
                "message" => 'Mysterious creatures are emerging from the depths of the sea and terrorizing our ports. We need a skilled sea monster hunter to defend us.',
            ],[
                "user_id" => '21',
                "message" => 'An ancient curse has awakened the dead in our graveyard. We seek a knowledgeable necromancer to address this spectral situation.',
            ],[
                "user_id" => '21',
                "message" => 'Creatures of darkness are emerging from the depths of the forest. We need a monster hunter to put an end to this menace.',
            ],[
                "user_id" => '22',
                "message" => 'Nerida, the ocean depths hide secrets we can\'t fathom. We need a siren\'s insight to navigate them.',
            ],[
                "user_id" => '22',
                "message" => 'A sea monster is terrorizing our shores. Nerida, we seek your enchanting melodies to calm the waters.',
            ],[
                "user_id" => '22',
                "message" => 'Nerida, we\'ve heard tales of your aquatic prowess. Can you help us with a marine mystery?',
            ],[
                "user_id" => '22',
                "message" => 'Mysterious creatures emerge from the sea abyss and terrorize our ports. We need a skilled sea monster hunter to defend us.',
            ],[
                "user_id" => '22',
                "message" => 'Ancient ruins have awakened, and spectral guardians roam our archaeological site. We seek an archaeologist with knowledge of the arcane to uncover their secrets.',
            ],[
                "user_id" => '23',
                "message" => 'Orion, we\'ve encountered mythical creatures with unknown origins. Can your expertise help us understand them?',
            ],[
                "user_id" => '23',
                "message" => 'Our quest has led us to the heart of Asia, where ancient legends come to life. We need your knowledge, Orion.',
            ],[
                "user_id" => '23',
                "message" => 'Orion, we\'re facing a challenge that straddles the line between Europe and Asia. Your expertise in both realms is vital.',
            ],[
                "user_id" => '23',
                "message" => 'Our dreams are plagued by nightmarish creatures from the Dream Realm. We need a skilled dreamweaver to protect our slumbering minds.',
            ],[
                "user_id" => '23',
                "message" => 'A cursed forest has trapped our hunting party in its twisted maze. We seek a fearless pathfinder to guide us safely out.',
            ],[
                "user_id" => '23',
                "message" => 'A ghost ship, crewed by vengeful spirits, haunts our coastal waters. We need a skilled sea captain to face this spectral menace.',
            ],[
                "user_id" => '24',
                "message" => 'Anansi, we\'ve encountered mythical creatures from Africa and Oceania. Your expertise in these regions is essential.',
            ],[
                "user_id" => '24',
                "message" => 'The mysteries of African and Oceanian myths have confounded us. Anansi, can your web of knowledge unravel them?',
            ],[
                "user_id" => '24',
                "message" => 'Anansi, our journey has taken us to the heart of Oceania. Your tales of wisdom are our guiding light.',
            ],[
                "user_id" => '24',
                "message" => 'An enigmatic riddle guards the entrance to a hidden treasure trove. We require a cunning riddler to unlock its secrets.',
            ],[
                "user_id" => '24',
                "message" => 'A village of innocent wererabbits is threatened by a band of ruthless hunters. We seek a compassionate protector to shield these gentle creatures.',
            ],[
                "user_id" => '24',
                "message" => 'A magical artifact has been stolen, and its misuse could bring calamity. We need a resourceful thief with a heart of gold to retrieve it.',
            ],[
                "user_id" => '24',
                "message" => 'A mystical fog has engulfed our town, and it conceals ancient relics. We seek a fog-whisperer to navigate through this mystical haze.',
            ],[
                "user_id" => '25',
                "message" => 'Maya, we\'ve encountered creatures of legend from the Americas. Can your wisdom guide us through these uncharted stories?',
            ],[
                "user_id" => '25',
                "message" => 'The myths of the Americas are complex. Maya, we need your expertise to distinguish fact from fiction.',
            ],[
                "user_id" => '25',
                "message" => 'Maya, our journey has taken us through the heart of the Americas. Your knowledge is our compass.',
            ],[
                "user_id" => '25',
                "message" => 'Ancient stone guardians have awakened and now guard an entrance to an underground realm. We seek a diplomat skilled in negotiating with ancient beings.',
            ],[
                "user_id" => '25',
                "message" => 'A cursed mirror has trapped our reflection and created malevolent doppelgangers. We need an expert mirror mage to break the curse.',
            ],[
                "user_id" => '25',
                "message" => 'A phoenix egg, said to grant rebirth, has been stolen by a group of thieves. We seek a heroic guardian to retrieve the egg and protect its power.',
            ],[
                "user_id" => '25',
                "message" => 'A mischievous poltergeist is causing havoc in our village, and we can\'t find peace. We need a paranormal investigator to resolve this ghostly dilemma.',
            ],[
                "user_id" => '26',
                "message" => 'Kai, the mysteries of the deep ocean have confounded us. We need a sea monster expert like you to guide us.',
            ],[
                "user_id" => '26',
                "message" => 'The sea monsters are growing bolder. Kai, we need your unmatched courage to protect our shores.',
            ],[
                "user_id" => '26',
                "message" => 'Kai, we\'ve uncovered secrets of Asian myth beneath the waves. Can your experience help us navigate these treacherous waters?',
            ],[
                "user_id" => '26',
                "message" => 'The spirit of an ancient hero is trapped in a cursed sword, and only a worthy warrior can release it. We are looking for a noble champion to wield the blade.',
            ],[
                "user_id" => '26',
                "message" => 'A mysterious plague is spreading, turning our livestock into monstrous creatures. We seek a skilled herbalist to find a cure and save our farms.',
            ],[
                "user_id" => '26',
                "message" => 'An ancient library of forgotten knowledge lies hidden within a labyrinth of shifting sands. We are in search of a dedicated scholar to uncover its secrets.',
            ],[
                "user_id" => '26',
                "message" => 'A forest guardian, angered by the destruction of its grove, threatens to unleash nature\'s fury. We need an eco-mage to restore balance.',
            ],[
                "user_id" => '26',
                "message" => 'A cursed amulet has bound our village\'s fate to the changing moon phases. We require a lunar expert to break this celestial curse.',
            ],[
                "user_id" => '27',
                "message" => 'Orion, we\'ve encountered extraterrestrial beings beyond our understanding. Can your insights into aliens guide us?',
            ],[
                "user_id" => '27',
                "message" => 'The enigma of alien lifeforms is upon us. Orion, your knowledge of the cosmos is our only hope.',
            ],[
                "user_id" => '27',
                "message" => 'Orion, we\'ve awakened an artificial intelligence that poses a threat. Can your expertise help us navigate this digital realm?',
            ],[
                "user_id" => '27',
                "message" => 'A horde of zombies threatens to invade our kingdom. We are in search of a courageous troop commander to repel the undead horde.',
            ],[
                "user_id" => '27',
                "message" => 'Alien creatures have landed in our fields and seem to want to communicate. We are in need of an expert in alien languages to establish peaceful contact.',
            ],[
                "user_id" => '27',
                "message" => 'Artificial intelligences are displaying unexpected and uncontrollable behaviors. We seek the assistance of an AI expert to restore order to the network.',
            ],[
                "user_id" => '27',
                "message" => 'A portal to another dimension has opened, and eldritch horrors are pouring through. We require a brave dimension-traveler to seal the breach.',
            ],[
                "user_id" => '28',
                "message" => 'Greetings, I require assistance with banishing a malevolent spirit.',
            ],[
                "user_id" => '28',
                "message" => 'I\'ve encountered a particularly stubborn demon. Can you help me?',
            ],[
                "user_id" => '28',
                "message" => 'A malevolent spirit is causing havoc in my home. I need your expertise, Seraphina.',
            ],[
                "user_id" => '28',
                "message" => 'Seraphina, the malevolent spirit seems to be growing stronger. Please, I need your help!',
            ],[
                "user_id" => '28',
                "message" => 'The presence of the malevolent spirit is becoming unbearable. Seraphina, I implore you to assist me.',
            ],[
                "user_id" => '28',
                "message" => 'Seraphina, your reputation as an expert in dealing with otherworldly entities precedes you. I need your aid urgently.',
            ],[
                "user_id" => '29',
                "message" => 'I\'m facing a dragon that\'s terrorizing our village. Help needed!',
                
            ],[
                "user_id" => '29',
                "message" => 'The dragon is proving to be a formidable opponent. Draven, I need your expertise.',
                
            ],[
                "user_id" => '29',
                "message" => 'The villagers are looking to you, Draven, to save us from the fiery menace.',
                
            ],[
                "user_id" => '29',
                "message" => 'Draven, the situation with the dragon has become dire. We need you now more than ever.',
            ],[
                "user_id" => '30',
                "message" => 'I need assistance dealing with a deadly sea serpent.',
                
            ],[
                "user_id" => '30',
                "message" => 'Siren Songblade, the sea serpent has returned. We require your expertise once more.',
                
            ],[
                "user_id" => '30',
                "message" => 'The crew and I are putting our trust in you, Siren Songblade. The sea serpent must be stopped.',
            ],[
                "user_id" => '31',
                "message" => 'Can you help me capture a mischievous kitsune?',
                
            ],[
                "user_id" => '31',
                "message" => 'Aiko Kitsune, the mischievous kitsune has returned. We seek your guidance in capturing it.',
                
            ],[
                "user_id" => '31',
                "message" => 'The mischievous kitsune is toying with our village. Aiko Kitsune, we need your intervention.',
                
            ],[
                "user_id" => '31',
                "message" => 'Aiko Kitsune, the kitsune\'s tricks are causing chaos. We implore you to lend us your expertise.',
            ],[
                "user_id" => '32',
                "message" => 'Orcs have overrun our mine. Need immediate assistance!',
                
            ],[
                "user_id" => '32',
                "message" => 'Thorne Ironclad, the orcs have returned with a vengeance. We require your strength and expertise.',
                
            ],[
                "user_id" => '32',
                "message" => 'The miners and I are putting our faith in you, Thorne Ironclad. The orcs must be driven back.',
            ],[
                "user_id" => '33',
                "message" => 'I\'ve encountered a zombie outbreak. Help!',
                
            ],[
                "user_id" => '33',
                "message" => 'Nyx the Necromancer, the undead have risen again. We need your dark arts to quell this outbreak.',
                
            ],[
                "user_id" => '33',
                "message" => 'The town is in chaos, Nyx. We\'re counting on your mastery over the undead to save us.',
            ],[
                "user_id" => '34',
                "message" => 'Alien technology is threatening our world. Can you assist?',
                
            ],[
                "user_id" => '34',
                "message" => 'Vega Stardust, the extraterrestrial threat is imminent. We need your expertise in this dire hour.',
                
            ],[
                "user_id" => '34',
                "message" => 'The world looks to you, Vega Stardust, to prevent this global catastrophe.',
                
            ],[
                "user_id" => '34',
                "message" => 'Vega Stardust, the alien technology is advancing. We need your unmatched understanding to counter it.',
            ],[
                "user_id" => '35',
                "message" => 'Rogue AI robots are causing havoc. Need your expertise!',
                
            ],[
                "user_id" => '35',
                "message" => 'Artemis Steelheart, the rogue AI threat has resurfaced. We require your swift action to neutralize it.',
                
            ],[
                "user_id" => '35',
                "message" => 'The city looks to you, Artemis Steelheart, to safeguard us from this rogue AI menace.',
            ],[
                "user_id" => '36',
                "message" => 'An eldritch abomination has surfaced. We need immediate help!',
                
            ],[
                "user_id" => '36',
                "message" => 'Orion Voidwalker, the eldritch abomination threatens our world. We need your courage and expertise now more than ever.',
                
            ],[
                "user_id" => '36',
                "message" => 'The world looks to you, Orion Voidwalker, to confront this unimaginable horror from beyond.',
                
            ],[
                "user_id" => '36',
                "message" => 'Orion Voidwalker, the eldritch abomination\'s presence is causing widespread panic. We need your unmatched bravery to face it.',
            ],[
                "user_id" => '37',
                "message" => 'I\'m seeking guidance on communing with forest spirits.',
                
            ],[
                "user_id" => '37',
                "message" => 'Luna Starwhisper, can you share your insights on connecting with the energy of the moon?',
                
            ],[
                "user_id" => '37',
                "message" => 'I\'ve heard about your expertise in vampire lore. Can you provide any guidance on understanding their nature?',
            ],
        ];

        foreach ($messages as $message) {
            $newMessage = new BookingMessage();
            $newMessage->user_id = $message['user_id'];
            $newMessage->email = $faker->email();
            $newMessage->message = $message['message'];
            $newMessage->save();
        }
    }
}
