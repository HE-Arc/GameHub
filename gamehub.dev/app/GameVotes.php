<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameVotes extends Model
{
    protected $fillable = ['games_id', 'user_id', 'vote'];
    protected $table = 'game_votes';
    public $timestamps = false;
}
