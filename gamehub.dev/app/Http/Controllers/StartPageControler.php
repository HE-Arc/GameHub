<?php

namespace App\Http\Controllers;

use App\Games;

class StartPageControler extends Controller
{
    public function index()
    {
        $games = Games::all();

        return view('startpage', ['games' => $games]);
    }
}
