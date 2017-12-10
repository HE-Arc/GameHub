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
            $user = User::find($key->user_id);
            $name = $user->name;
            //maybe later : $photo = $user->first()->photo_url;
            $userVote = 0;
            $vote = 0;
            $voteStatus = 0;
            $point=0;
            foreach ($key->votes as $note) {
                $point =  $point + $note->pivot->note;
            }
            /*if (Auth::user()) {
                $voteByUser = Comment::where('comment_id', $key->id)->where('user_id', Auth::user()->id)->first();
                if ($voteByUser) {
                    $userVote = 1;
                    $voteStatus = $voteByUser->vote;
                }
            }*/
            array_push($commentsData, [
                   'name'           => $name,
                   'commentid'      => $key->id,
                   'title'          => $key->title,
                   'content'        => $key->content,
                   'votes'          => $point,
                   //'votedByUser'    => $userVote,
                   //'userVoteStatus' => $voteStatus,
                   'date'           => $key->created_at->format('m/d/Y'),
                   'hour'           => $key->created_at->format('H:i'),
                ]);
        }
        $collection = collect($commentsData);

        $sortedComments =$collection->sortBy('votes');
        return view('comments.comment', ['comments' => $sortedComments]);
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
            'user_id' => 'required',
        ]);
        $comment = Comment::create($request->all());

        if ($comment) {
            return ['status' => 'true', 'commentId' => $comment->id];
        }
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
    public function update(Request $request, $commentID)
    {
        $this->validate($request, [
            'vote'     => 'required',
            'users_id' => 'required',
            ]);
        $comments = Comment::find($commentId);
        $data = [
            'comment_id' => $commentId,
            'vote'       => $request->vote,
            'user_id'    => $request->users_id,
        ];

        if ($request->vote == 'up') {
            $comment = $comments->first();
            $vote = $comment->votes;
            $vote++;
            $comments->votes = $vote;
            $comments->save();
        }

        if ($request->vote == 'down') {
            $comment = $comments->first();
            $vote = $comment->votes;
            $vote--;
            $comments->votes = $vote;
            $comments->save();
        }/*
        if (CommentVote::create($data)) {
            return 'true';
        }*/
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
