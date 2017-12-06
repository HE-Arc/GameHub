<?php

namespace App\Http\Controllers;

class GameInfoControler extends Controller
{
    public function index($steam_id)
    {
        return view('infogame');
    }
}
