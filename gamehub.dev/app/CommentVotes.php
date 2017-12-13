<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentVotes extends Model
{
    protected $fillable = ['comment_id', 'user_id', 'vote'];
    protected $table = 'comment_votes';
    public $timestamps = false;
}
