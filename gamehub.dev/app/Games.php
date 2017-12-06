<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    protected $fillable = ['name'];
    protected $dates = ['created_at', 'updated_at'];

    public function users()
    {
      $this->belongsToMany(User::class)->withPivot('grades');
    }
}
