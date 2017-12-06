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
            'grade' => 3,
            'picture' => 'Assassin_s_Creed_III.jpg',
        ]);

        DB::table('games')->insert([
            'steam_id' => 2,
            'name'     => 'Battlefield 4',
            'grade' => 4,
            'picture' => 'battlefield-4.jpg',
        ]);

        DB::table('games')->insert([
            'steam_id' => 3,
            'name'     => 'Kerbal Space Program',
            'grade' => 5,
            'picture' => 'Kerbal_Space_Program.jpg',
        ]);
		DB::table('users')->insert([
            'name' => 'usernametest',
            'email' => 'test@gmail.com',
			'password' => 'motdepasse',
        ]);
        DB::table('users')->insert([
            'name' => 'usernametest2',
            'email' => 'test2@gmail.com',
            'password' => 'motdepasse',
        ]);
		DB::table('comments')->insert([
            'user_id' => 1,
            'game_id' => 1,
			'title' => 'titre du commentaire',
			'content' => 'contenu du commentaire',
			'created_at' =>date ("Y-m-d H:i:s", time()),
			'updated_at'=>date ("Y-m-d H:i:s", time()),
        ]);
		DB::table('comments')->insert([
            'user_id' => 1,
            'game_id' => 1,
			'title' => 'titre du commentaire2',
			'content' => 'contenu du commentaire2',
			'created_at' =>date ("Y-m-d H:i:s", time()),
			'updated_at'=>date ("Y-m-d H:i:s", time()),
        ]);
        DB::table('comment_votes')->insert([
            'comment_id'=> 1,
            'user_id'=> 1,
            'note' => 1,
        ]);
        DB::table('comment_votes')->insert([
            'comment_id'=> 1,
            'user_id'=> 2,
            'note' => 1,
        ]);
        DB::table('comment_votes')->insert([
            'comment_id'=> 2,
            'user_id'=> 1,
            'note' => 1,
        ]);
    }
}
