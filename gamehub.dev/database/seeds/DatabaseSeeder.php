<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('games')->insert([
            'steam_id' => 1,
            'name'     => 'Mon jeu',
        ]);

        DB::table('games')->insert([
            'steam_id' => 2,
            'name'     => 'Mon jeu 2',
        ]);

        DB::table('games')->insert([
            'steam_id' => 3,
            'name'     => 'Mon jeu 3',
        ]);
    }
}
