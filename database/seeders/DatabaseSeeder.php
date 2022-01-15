<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@localhost.sk',
//            'password' => Hash::make('Password')
            'password' => 'Password'
        ]);

        \App\Models\User::factory(10)->create();

        Game::factory()->create([
            'image' => 'games/witcher3.jpg',
            'name' => 'The Witcher 3: Wild Hunt',
            'relase_date' => '2015',
            'platform' => 'PC/PS4/XBOX',
            'genre' => 'Akčné RPG',
            'HW_requirements' => 'Stredné',
            'rating' => 100,
            'description' => 'You play as a bounty hunter, a man of the road. You set your own goals and choose your own destinations. Go after the bounty on the head of a nasty monster.'

        ]);
        Game::factory()->create([
            'image' => 'games/tlou2.png',
            'name' => 'The Last of Us 2',
            'relase_date' => '2020',
            'platform' => 'PS4',
            'genre' => 'Akčná adventúra',
            'HW_requirements' => 'PS4',
            'rating' => 95,
            'description' => 'The Last of Us Part II is a 2020 action-adventure game developed by Naughty Dog and published by Sony Interactive Entertainment for the PlayStation 4.'

        ]);
        Game::factory()->create([
            'image' => 'games/got.jpg',
            'name' => 'Ghost of Tsushima',
            'relase_date' => '2020',
            'platform' => 'PS4',
            'genre' => 'Akčná adventúra',
            'HW_requirements' => 'PS4',
            'rating' => 95,
            'description' => 'Ghost of Tsushima is a 2020 action-adventure game developed by Sucker Punch Productions and published by Sony Interactive Entertainment.'
        ]);

        Game::factory()->create([
            'image' => 'games/rdr.jpg',
            'name' => 'Red Dead Redemption 2',
            'relase_date' => '2018',
            'platform' => 'PC/PS4/XBOX',
            'genre' => 'Akčná adventúra',
            'HW_requirements' => 'Vysoké',
            'rating' => 95,
            'description' => 'Arthur Morgan and the Van der Linde gang are outlaws on the run. With federal agents and the best bounty hunters in the nation massing on their heels, the gang .'
        ]);

        Game::factory()->create([
            'name' => 'Star Wars Jedi: Fallen Order',
            'relase_date' => '2020',
            'platform' => 'PC/PS4/XBOX',
            'genre' => 'Akčná adventúra',
            'HW_requirements' => 'Stredné',
            'rating' => 94,
            'description' => 'Frostpunk is a city-building survival videogame developed and published by 11 bit studios. Players take on the role of a leader in an alternate-history late 19th century, in which they must build and maintain a city during a worldwide volcanic winter.'
        ]);

        Game::factory()->create([
            'name' => 'Metro Exodus',
            'relase_date' => '2019',
            'platform' => 'PC/PS4/XBOX',
            'genre' => 'FPS',
            'HW_requirements' => 'Vysoké',
            'rating' => 92,
            'description' => 'Metro Exodus is a first-person shooter video game developed by 4A Games and published by Deep Silver. It is the third installment in the Metro video game trilogy based on Dmitry Glukhovsky.'
        ]);

        Game::factory()->create([
            'image' => 'games/frost.jpg',
            'name' => 'Frostpunk',
            'relase_date' => '2018',
            'platform' => 'PC/PS4/XBOX/Android',
            'genre' => 'Stratégia',
            'HW_requirements' => 'Nízke',
            'rating' => 93,
            'description' => 'Metro Exodus is a first-person shooter video game developed by 4A Games and published by Deep Silver. It is the third installment in the Metro video game trilogy based on Dmitry Glukhovsky.'
        ]);

        Game::factory()->create([
            'name' => 'Doom Eternal',
            'relase_date' => '2020',
            'platform' => 'PC/PS4/XBOX',
            'genre' => 'FPS',
            'HW_requirements' => 'Vysoké',
            'rating' => 92,
            'description' => 'Hell’s armies have invaded Earth. Become the Slayer in an epic single-player campaign to conquer demons across dimensions and stop the final destruction of humanity.'
        ]);

        Game::factory()->create([
            'name' => 'Cyberpunk 2077',
            'relase_date' => '2020',
            'platform' => 'PC/PS4/XBOX',
            'genre' => 'Akčńe RPG',
            'HW_requirements' => 'Vysoké',
            'rating' => 90,
            'description' => 'Cyberpunk 2077 is an action role-playing video game developed and published by CD Projekt. The story takes place in Night City, an open world set in the Cyberpunk universe. Players assume the first-person perspective of a customisable mercenary known as V, who can acquire skills in hacking and machinery with options for melee and ranged combat.'
        ]);

        Game::factory()->create([
            'name' => 'Assassins Creed: Valhalla',
            'relase_date' => '2020',
            'platform' => 'PC/PS4/XBOX',
            'genre' => 'Akčná adventúra',
            'HW_requirements' => 'Vysoké',
            'rating' => 90,
            'description' => 'Assassins Creed: Valhalla is the twelfth main installment in the Assassins Creed series developed by Ubisoft. In the game, the player takes control of Eivor, a Viking from Norway who participated in the Norse invasion of England during the 9th century'
        ]);


        /*POSTY*/

        Post::factory()->create([
            'image' => 'posts/ycmR55MJ7YOXLOiY7cdNIIaOdfKwPZ5xeE0Xv8zh.webp',
            'title' => 'Jedi Fallen Order',
            'text' => 'Star Wars Jedi: Fallen Order is an action-adventure game developed by Respawn Entertainment and published by Electronic Arts. It was released for Windows, PlayStation 4 and Xbox One in November 2019, for Stadia in November 2020, and for the PlayStation 5 and Xbox Series X and Series S in June 2021. The story, set in the Star Wars universe five years after Star Wars: Episode III – Revenge of the Sith, follows Jedi Padawan Cal Kestis, who becomes a target of the Galactic Empire and is hunted throughout the galaxy by two Inquisitors while attempting to complete his training, escape his troubled past, and rebuild the fallen Jedi Order.',
        ]);

        Post::factory()->create([
            'image' => 'posts/TOU0t7kCDe6H8XH6tkyalqSPR2WSyePQHYjhVHDj.png',
            'title' => 'Witcher 3: Wild Hunt',
            'text' => 'The Witcher 3: Wild Hunt is the third and final installment in the series of games developed by CD Projekt RED featuring the witcher Geralt of Rivia. The game was originally scheduled for release in late 2014, then pushed back to 24 February 2015, and finally released on 19 May 2015. During the first two weeks since release it had sold more than 4 million copies worldwide, more than doubling the total sales of its predecessor, The Witcher 2: Assassins of Kings. Unlike the previous games, The Witcher 3 is set in a multi-region open world, featuring over 100 hours of content.[6] Several early articles mentioned that the developers planned to have an open world similar to that of Skyrim, but 20% larger.[7][8] The developers were quick to point out that while there was much to appreciate in Bethesdas open world concept, they were also making an effort not to repeat what they perceived as the flaws in-game. As with earlier games, the consequences of Geralts actions will impact how the narrative progresses. The game has been built using the new REDengine 3 and was designed with player feedback from fans of previous Witcher games in mind.[9] For fans of the series, the online event "Killing Monsters", a weekly giveaway of wallpapers and audio files that ran from 10 June 2013 to 14 August 2013, culminated in the release of the "Killing Monsters" cinematic trailer.
             On 14 May 2015, CD Projekt RED (working with Digic Pictures) released a pre-launch short story trailer titled "A Night to Remember".On September 4, 2020, it was announced that the game and its expansions would be getting a next-generation upgrade and would be released as a standalone purchase for the next-generation consoles (Xbox Series X and PlayStation 5) as well as PC. A free update will be given out to those who already own the game on the PC, Xbox One, and PlayStation 4.[1] While it was originally expected to be released in 2021[2] it was later announced that the next-generation update had been delayed to 2022.[10]  The world is in chaos. The air is thick with tension and the smoke of burnt villages. The fearsome Empire of Nilfgaard has struck again, ravaging the helpless Northern Kingdoms. The once mighty who tried to use Geralt for their own gain are now gone. In these uncertain times, no one can say what fortune holds in store, who will bring peace to the world and who will cause it only misery. But a force darker and deadlier emerges.The petty men and women commanding tin-plated armies fail to understand that their conflict is childs play compared to the Wild Hunt, the otherworldly threat which now looms. These ghastly spectral riders have for ages plagued humankind, bringing misery to the world. This time the Wild Hunt seeks one person in particular: the one individual Destiny itself bestowed upon Geralt, the one soul Geralt considers kin.,'
        ]);

        Post::factory()->create([
            'image' => 'posts/zI2hGa8Lrn9RRIjMPeLNAcPEChqpVXsASOZZbSUx.jpg',
            'title' => 'The last of Us 2',
            'text' => 'The Last of Us Part II is a 2020 action-adventure game developed by Naughty Dog and published by Sony Interactive Entertainment for the PlayStation 4. Set five years after The Last of Us (2013), the game focuses on two playable characters in a post-apocalyptic United States whose lives intertwine: Ellie, who sets out for revenge after suffering a tragedy, and Abby, a soldier who becomes involved in a conflict between her militia and a religious cult. The game is played from the third-person perspective and allows the player to fight human enemies and cannibalistic zombie-like creatures with firearms, improvised weapons, and stealth.'
        ]);

        Post::factory()->create([
            'image' => 'posts/lIkSJ8JT1ReJBa6UPmFer62hrdjbkzt1qQkiTq2T.jpg',
            'title' => 'Red Dead Redemption 2',
            'text' => 'Red Dead Redemption 2 (stylized as Red Dead Redemption II) is a western-themed action-adventure video game developed and published by Rockstar Games. It is the third entry in the Red Dead series and a prequel to 2010s Red Dead Redemption[4] and was released on October 26th, 2018[5] on PlayStation 4, Xbox One[6] and on November 5th, 2019 for PC. Set in a fictional recreation of the American Old West in 1899, Red Dead Redemption 2 focuses on the life of Arthur Morgan and his position in the notorious Van der Linde gang. The game follows the gangs decline as they are pursued by lawmen, fellow gangs and Pinkerton agents. The narrative revolves around the characters of Dutch van der Linde, John Marston and Micah Bell in addition to Morgan.',
        ]);

        Post::factory()->create([
            'image' => 'posts/XRfdVP5nyuxkBySuP0I5k43KaHVI6KeBk9ElRHJU.webp',
            'title' => 'Metro Exodus',
            'text' => 'Metro Exodus (Russian: Метро: Исход) is the third part in the Metro video game series, set after the events of Metro: Last Light and Metro 2035. It follows the adventures of Artyom, who returns to reprise his role as the protagonist of the game.',
        ]);

        Post::factory()->create([
            'image' => 'posts/mIcoiYDQA0McWsVYdCIG6tT0NgwqD1O5zezP6sYU.jpg',
            'title' => 'League of Legends',
            'text' => 'League of Legends (or LoL; initially League of Legends icon old2.png League of Legends: Clash of Fates) is a multiplayer online battle arena (MOBA) genre video game developed by Riot Games.[5] It was designed to operate on the Microsoft Windows operating system. The game was first announced on October 7, 2008 and released a year later on October 27, 2009.[6] The game was in beta from April 10, 2009[7] to October 26th, 2009.[8]',
        ]);

        Post::factory()->create([
            'image' => 'posts/e8S6eHB1zUG3ds9Rtu19KadIds3btkmAHTA1lj7h.webp',
            'title' => 'Frostpunk',
            'text' => 'Frostpunk is a simulation and strategy game of managing a city struggling to survive after apocalyptic global cooling, the only heat coming from the generator in the center of town. Players must keep their citizens hopeful and happy while making decisions and enacting laws that may be unpleasant and morally questionable, but are necessary for people to survive. Research new technology, scout the frozen wasteland for extra resources and more survivors, develop automatons that can work endlessly, and push through the harsh winter. Frostpunk was released on XBox One and PS4 on October 11, 2019. Frostpunk was released on PC on April 24, 2018.',
        ]);

        Post::factory()->create([
            'image' => 'posts/JbpmsJhYml8Zw5ART75gQM6Nkjh2dym2T5UoZjlj.webp',
            'title' => 'Cyberpunk 2077',
            'text' => 'The Cyberpunk series began with the pen and paper RPG book Cyberpunk 2013, subtitled "The Roleplaying Game of the Dark Future," which released in 1988. The series saw further editions with Cyberpunk 2020 (1990) and Cyberpunk RED (2019). A role-playing video game developed by CD Projekt RED was released on December 10, 2020 under the title Cyberpunk 2077.
                Note that spoilers may be posted on this Fandom that may not have been marked off yet. Please proceed at your own discretion if you dont want to see spoilers, thanks!',
        ]);

        Post::factory()->create([
            'image' => 'posts/NxB4YyuR9cPf58e31bC5ouUuGSXSxs62ymoaZucx.webp',
            'title' => 'Assassins Creed: Valhalla',
            'text' => 'Assassins Creed: Valhalla is the twelfth main installment in the Assassins Creed series developed by Ubisoft.[1] In the game, the player takes control of Eivor,[2] a Viking from Norway who participated in the Norse invasion of England during the 9th century.[3]',
        ]);

        Post::factory()->create([
            'image' => 'posts/sPDp1hPaiHKlwOLIeSpDWUEqcBwWgmgXL3r31jBG.webp',
            'title' => 'Doom Eternal',
            'text' => 'Doom Eternal is a first-person shooter game developed by id Software and published by Bethesda Softworks. The sequel to Doom (2016), and the fifth main game in the Doom series, it was released on March 20, 2020, for Windows, PlayStation 4, Stadia and Xbox One, with a version for Nintendo Switch being released on December 8, 2020 and versions for PlayStation 5 and Xbox Series X and Series S being released on June 29, 2021. Set some time after the events of the 2016 game, the story follows the Doomguy once again, on a mission to end Hell s consumption of Earth and foil the alien Maykrs plans to exterminate humanity.Along with the single-player campaign, a multiplayer mode, Battlemode, was introduced. In this mode, players can either play as the Doom Slayer or as a demon, and fight until either the Doom Slayer defeats the demons, or vice versa. Another mode, Horde mode, was added in October 2021. The Ancient Gods, a two-part standalone campaign DLC set after the events of the main game, was released between October 2020 and March 2021.',
        ]);

        Post::factory()->create([
            'image' => 'posts/x4N1wgUTmv4C9iT9m61nFXeUizEC9GrkGRXMsvfH.jpg ',
            'title' => 'Ghost of Tsushima',
            'text' => 'Ghost of Tsushima is a 2020 action-adventure game developed by Sucker Punch Productions and published by Sony Interactive Entertainment. Featuring an open world, the player controls Jin Sakai, a samurai on a quest to protect Tsushima Island during the first Mongol invasion of Japan. The game was released for PlayStation 4 on July 17, 2020, and a Directors Cut for PlayStation 4 and PlayStation 5, titled Ghost of Tsushima: Directors Cut, was released on August 20, 2021. It received several award nominations and wins, and received praise for its visuals, art direction, narrative, and combat but was criticized for its open world design. Ghost of Tsushima had sold 8 million copies by January 2022. A film adaptation is currently in development.',
        ]);


    }
}
