<?php

namespace App\Http\Controllers;

use App\GamesUser;
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
        $res= auth()->user()->games()->where('games_id',$id)->first();
        if($res)
        {

        }
        else
        {
            $userid= auth()->user()->id;
            DB::table('games_user')->insert([
                  'games_id' => $id,
                  'user_id'  => $userid,
                  'grade'    => 0,
                  'played'   => 0,
                ]);


        }
        return \Redirect::route('route.startpage');
    }

    public function insertPlayed()
    {
        $res= auth()->user()->games()->where('games_id',$_POST['game_id'])->first();
        $userid= auth()->user()->id;
        if($res)
        {
            if($res->pivot->played==0)
            {
                DB::table('games_user')->where('games_id', $_POST['game_id'])->where('user_id',$userid)->update(['grade' => $_POST['grade'],'played' => 1]);
            } 
        }
        else
        {
            
            DB::table('games_user')->insert([
                  'games_id' => $_POST['game_id'],
                  'user_id'  => $userid,
                  'grade'    => $_POST['grade'],
                  'played'   => 1,
                ]);


        }
        return \Redirect::route('route.startpage');

        
    }

    public function deleteGame($id)
    {
        $userid= auth()->user()->id;
        DB::table('games_user')->where('games_id', $id)->where('user_id', $userid)->delete();
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
