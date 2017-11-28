<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
     protected $fillable = ['title','content','game_id','users_id'];
     protected $dates = ['created_at', 'updated_at'];
}
