<?php

namespace App\Http\Controllers;

use App\GamesUser;
use App\Games;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function getWishList()
    {
        $games = auth()->user()->list(0);

        return view('gamesuser.wishlist', ['games' => $games]);
    }

    public function getPlayedList()
    {
        $games = auth()->user()->list(1);

        return view('gamesuser.playedlist', ['games' => $games]);
    }

    public function insertWish($id)
    {
        $game_user = new GamesUser;
        $res= auth()->user()->games()->where('games_id',$id)->first();
        if($res)
        {

        }
        else
        {
            $userid= auth()->user()->id;
            $game_user->insertGameWished($id,$userid);
        }
        return \Redirect::route('route.startpage');
    }

    public function insertPlayed()
    {
        $game_user = new GamesUser;
        $res= auth()->user()->games()->where('games_id',$_POST['game_id'])->first();
        
        $userid= auth()->user()->id;
        if($res)
        {
            if($res->pivot->played==0)
            {
                $game_user->updateGamePlayed($_POST['game_id'],$userid,$_POST['grade']);
            } 
        }
        else
        {          
            $game_user->insertGamePlayed($_POST['game_id'],$userid,$_POST['grade']);
        }   

        $average=$game_user->average( $_POST['game_id']);
        $games = new Games;
        $games->setAvg( $_POST['game_id'],$average);

        
       return \Redirect::route('route.startpage');      
    }

    public function deleteGame($id)
    {
        $userid= auth()->user()->id;
        $game_user = new GamesUser;
        $game_user->deleteGame($id,$userid);

        $average=$game_user->average( $id);
        $games = new Games;
        $games->setAvg( $id,$average);

        
        return \Redirect::route('route.startpage');
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
