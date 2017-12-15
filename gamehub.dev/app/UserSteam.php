<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenficable;

class UserSteam extends Authenficable
{
    protected $fillable = [
      'username', 'avatar',
  ];
}
