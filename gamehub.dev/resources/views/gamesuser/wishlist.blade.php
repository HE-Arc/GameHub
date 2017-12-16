@extends('layouts.mainlayout')

@section('content')

<h1>Wishlist</h1>

@include('layouts.layouttiled', ['parameter' => ['toplayedlist','delete']])
@include('layouts.layoutaddgame',['wishlist' => true])

@stop