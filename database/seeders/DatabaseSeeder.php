<?php

namespace Database\Seeders;

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
    }
}
