<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    protected $fillable = ['name'];
    protected $dates = ['created_at', 'updated_at'];

    public function users()
    {
      return $this->belongsToMany(User::class)->withPivot('grade');
    }
}
