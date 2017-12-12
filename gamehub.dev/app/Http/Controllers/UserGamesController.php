<?php

namespace App\Http\Controllers;

use App\UserGames;
use Illuminate\Http\Request;

class UserGamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$userid = auth()->user()->id;
        $games = auth()->user()->games()->get();

        foreach ($games as $game) {
          $tab = [];
          $tab['games_id'] = $game;
          $tab['grades'] = $game->withPivot('grade');
          $tab['img'] = $game->picture;
          $tab['grade'] = $game->withPivot('grade');
        }


        return view('usergames.index', ['usergames' => $tab]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\UserGames $userGames
     *
     * @return \Illuminate\Http\Response
     */
    public function show(UserGames $userGames)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\UserGames $userGames
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(UserGames $userGames)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\UserGames           $userGames
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserGames $userGames)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\UserGames $userGames
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserGames $userGames)
    {
        //
    }
}
