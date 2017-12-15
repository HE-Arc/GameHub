<?php

namespace App\Http\Controllers;

use App\Games;

class StartPageControler extends Controller
{
    public function index()
    {
        $games = Games::all()->sortByDesc("grade");;

        return view('startpage', ['games' => $games]);
    }
}
