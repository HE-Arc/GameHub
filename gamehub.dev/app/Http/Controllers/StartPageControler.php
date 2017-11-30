<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Games;

class StartPageControler extends Controller
{
    public function index()
    {
    	//$games['name']='test';
    	$games = DB::select('select * from games');
    	$games = Games::all();

        return view('startpage', ['games' => $games]);
    }
}
