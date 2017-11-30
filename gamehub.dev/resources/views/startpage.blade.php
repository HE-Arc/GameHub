@extends('layouts.mainlayout')

@section('content')

<h1>Best rating games</h1>
 
@include('layouts.layouttiled', ['games' => $games])

@endsection