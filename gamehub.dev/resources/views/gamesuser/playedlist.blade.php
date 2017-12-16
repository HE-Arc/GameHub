@extends('layouts.mainlayout')

@section('content')

<h1>Playedlist</h1>


@include('layouts.layouttiled', ['parameter' => ['delete','star']])


@stop