<?php

namespace Database\Seeders;

use App\Models\Game;
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
            'image'=> 'games/witcher3.jpg',
            'name' => 'The Witcher 3: Wild Hunt',
            'relase_date' => '2015',
            'platform' => 'PC/PS4/XBOX',
            'genre' => 'Akčné RPG',
            'HW_requirements' => 'Stredné',
            'rating' => 100,
            'description' => 'You play as a bounty hunter, a man of the road. You set your own goals and choose your own destinations. Go after the bounty on the head of a nasty monster.'

        ]);
        Game::factory()->create([
            'image'=> 'games/tlou2.png',
            'name' => 'The Last of Us 2',
            'relase_date' => '2020',
            'platform' => 'PS4',
            'genre' => 'Akčná adventúra',
            'HW_requirements' => 'PS4',
            'rating' => 95,
            'description' => 'The Last of Us Part II is a 2020 action-adventure game developed by Naughty Dog and published by Sony Interactive Entertainment for the PlayStation 4.'

        ]);
        Game::factory()->create([
            'image'=> 'games/got.jpg',
            'name' => 'Ghost of Tsushima',
            'relase_date' => '2020',
            'platform' => 'PS4',
            'genre' => 'Akčná adventúra',
            'HW_requirements' => 'PS4',
            'rating' => 95,
            'description' => 'Ghost of Tsushima is a 2020 action-adventure game developed by Sucker Punch Productions and published by Sony Interactive Entertainment.'
        ]);

        Game::factory()->create([
            'image'=> 'games/rdr.jpg',
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
            'image'=> 'games/frost.jpg',
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


    }
}
