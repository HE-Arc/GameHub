<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameInfoControler extends Controller
{
     public function index($steam_id)
    {
    	return view('infogame');
    }
}
