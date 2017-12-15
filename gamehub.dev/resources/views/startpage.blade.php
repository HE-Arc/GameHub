@extends('layouts.mainlayout')

@section('content')

<h1>Best rating games</h1>
<?php  
	$button = 'add';
?>

@include('layouts.layouttiled', ['button' => ['add']])
@include('layouts.layoutaddgame',['wishlist' => true])


@stop