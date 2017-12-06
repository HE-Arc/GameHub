@extends('layouts.mainlayout')

@section('content')
<h1>My Games</h1>
@include('layouts.layouttiled', ['games' => $usergames])
@endsection
