<?php

namespace App\Http\Controllers;

use App\GamesUser;
use Illuminate\Http\Request;

class GamesUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$userid = auth()->user()->id;
        $gamesuser = auth()->user()->games()->get();

        return view('gamesuser.index', compact('gamesuser'));
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
     * @param \App\GamesUser $GamesUser
     *
     * @return \Illuminate\Http\Response
     */
    public function show(GamesUser $gamesuser)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\GamesUser $GamesUser
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(GamesUser $gamesuser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\GamesUser           $GamesUser
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GamesUser $gamesuser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\GamesUser $GamesUser
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(GamesUser $gamesuser)
    {
        //
    }
}
