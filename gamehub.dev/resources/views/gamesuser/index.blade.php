@extends('layouts.mainlayout')

@section('content')
<h1>My Games</h1>
<?php $games = $gamesuser  ?>
	@include('layouts.layouttiled', ['parameter' => ['toplayedlist','star']])

	<?php echo $games; ?>
@endsection
