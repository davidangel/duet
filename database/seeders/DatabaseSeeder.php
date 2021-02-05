<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'David',
            'email' => 'david@davidangel.net',
            'password' => Hash::make('password'),
        ]);

        DB::table('teams')->insert([
            'name' => 'David\'s Team',
            'user_id' => 1,
            'personal_team' => 1,
        ]);
    }
}
