<?php

namespace App\Http\Controllers;

use App\Comment;
use App\User;
use Auth;
use Illuminate\Http\Request;

/* part of the code inspired from : https://www.cloudways.com/blog/comment-system-laravel-vuejs/ */
class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($gameId)
    {
        $comments = Comment::with('votes')->where('game_id', $gameId)->get();

        $commentsData = [];
        foreach ($comments as $key) {
            $user = $key->user;
            $name = $user->name;
            $userVote = 0;
            $vote = 0;
            $voteStatus = 0;
            $point = 0;
            foreach ($key->votes as $note) {
                $point = $point + $note->pivot->note;
            }
            if (Auth::user()) {
                $com = $key->votes()->where('user_id', Auth::id())->first();
                if ($com) {
                    $voteStatus = $com->pivot->note;
                }
            }
            array_push($commentsData, [
                   'name'           => $name,
                   'commentid'      => $key->id,
                   'title'          => $key->title,
                   'content'        => $key->content,
                   'votes'          => $point,
                   'voteStatus'     => $voteStatus,
                   'date'           => $key->created_at->format('d/m/Y'),
                   'hour'           => $key->created_at->format('H:i'),
                ]);
        }
        $collection = collect($commentsData);
        $sortedComments = $collection->sortByDesc('votes');
        return view('comments.comment', ['comments' => $sortedComments, 'game_id'=>$gameId]);
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
        $this->validate($request, [
            'title'   => 'required',
            'content' => 'required',
            'game_id' => 'filled',
        ]);
        auth()->user()->comments()->create($request->all());
        return redirect("/comments/".$request["game_id"]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Comments $comments
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Comments $comments
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Comments            $comments
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Comment $comment, Request $request)
    {
        if (Auth::check()) {
            $elem = $comment->votes()->where('user_id', Auth::id())->first();
            if($elem){
                $comment->votes()->updateExistingPivot(Auth::id(), ['note' =>  $request->input('note')]);
            }else{
                $comment->votes()->attach(Auth::id(), ['note' =>  $request->input('note')]);
            }
            return 'true';
        } else {
            return "login";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Comments $comment
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comments)
    {
        //
    }
}
