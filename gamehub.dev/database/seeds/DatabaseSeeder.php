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
            'games_id' => 1,
            'name'     => "Assassin's Creed III",
            'average_grade' => 3,
            'picture' => 'Assassin_s_Creed_III.jpg',
        ]);

        DB::table('games')->insert([
            'games_id' => 2,
            'name'     => 'Battlefield 4',
            'average_grade' => 4,
            'picture' => 'battlefield-4.jpg',
        ]);

        DB::table('games')->insert([
            'games_id' => 3,
            'name'     => 'Kerbal Space Program',
            'average_grade' => 5,
            'picture' => 'Kerbal_Space_Program.jpg',
        ]);

        DB::table('games_user')->insert([
          'games_id' => 1,
          'user_id' => 1,
          'grade' => 4,
          'played' => 1,
        ]);

        DB::table('games_user')->insert([
          'games_id' => 2,
          'user_id' => 1,
          'grade' => 4,
          'played' => 1,
        ]);

        DB::table('games_user')->insert([
          'games_id' => 3,
          'user_id' => 1,
          'grade' => 4,
          'played' => 1,
        ]);
    }
}
