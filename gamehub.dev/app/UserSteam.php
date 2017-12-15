<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenficable;
use Illuminate\Notifications\Notifiable;

class UserSteam extends Authenficable
{
  protected $fillable = [
      'username', 'avatar',
  ];
}
