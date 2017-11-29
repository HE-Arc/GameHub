<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameVotes extends Model
{
    protected $fillable = ['game_id', 'user_id', 'vote'];
    protected $table = 'game_votes';
    public $timestamps = false;
}
