@extends('layouts.mainlayout')

@section('content')

<h1>Best rating games</h1>

@include('layouts.layouttiled', ['parameter' => ['toplayedlist','towishlist','star']])
@include('layouts.layoutaddgame',['wishlist' => true])


@stop