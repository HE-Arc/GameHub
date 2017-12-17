<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GamesUser extends Model
{
    public $table = 'games_user';
    public $timestamps = false;

    public function average($game_id)
    {
        $average = $this->where('games_id', $game_id)->where('played', 1)->avg('grade');

        return round($average);
    }

    public function insertGamePlayed($game_id, $user_id, $grade)
    {
        $this->insert([
                  'games_id' => $game_id,
                  'user_id'  => $user_id,
                  'grade'    => $grade,
                  'played'   => 1,
                ]);
    }

    public function insertGameWished($game_id, $user_id)
    {
        $this->insert([
                  'games_id' => $game_id,
                  'user_id'  => $user_id,
                  'grade'    => 0,
                  'played'   => 0,
                ]);
    }

    public function updateGamePlayed($game_id, $user_id, $grade)
    {
        $this->where('games_id', $game_id)->where('user_id', $user_id)->update(['grade' => $grade, 'played' => 1]);
    }

    public function deleteGame($game_id, $user_id)
    {
        $this->where('games_id', $game_id)->where('user_id', $user_id)->delete();
    }
}
