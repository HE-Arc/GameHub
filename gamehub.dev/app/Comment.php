<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['title', 'content', 'game_id', 'user_id'];
    protected $dates = ['created_at', 'updated_at'];

    public function votes()
    {
        return $this->belongsToMany('App\User', 'comment_votes')->withPivot('note');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
