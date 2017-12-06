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
            'name'     => "Assassin's Creed III",
            'average_grade' => 3,
            'picture' => 'Assassin_s_Creed_III.jpg',
        ]);

        DB::table('games')->insert([
            'steam_id' => 2,
            'name'     => 'Battlefield 4',
            'average_grade' => 4,
            'picture' => 'battlefield-4.jpg',
        ]);

        DB::table('games')->insert([
            'steam_id' => 3,
            'name'     => 'Kerbal Space Program',
            'average_grade' => 5,
            'picture' => 'Kerbal_Space_Program.jpg',
        ]);
    }
}
