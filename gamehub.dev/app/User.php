<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function games()
    {
        return $this->belongsToMany(Games::class)->withPivot('grade', 'played');
    }

    public function list($played)
    {
        $data=$this->belongsToMany(Games::class)->withPivot('grade', 'played')->get();
        $games=array();
        foreach ($data as $value)
        {  
            $game_user=$value->pivot;
            if($game_user['played']==$played)
            {  
                $game=(object) array('id' => '0', 'name' => '0','picture' => '0','grade' => '0',);
                $game->id=$value->id;
                $game->name=$value->name;
                $game->picture=$value->picture;
                $game->grade=$game_user->grade;
                $games[]=$game;
                
            } 
             
        }
        return $games;
    }
}
