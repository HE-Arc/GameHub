@extends('layouts.mainlayout')

@section('content')
	<?php foreach ($comments as $comment) {?>
	<div class="jumbotron">
		<?php
			echo " posté par : ". $comment['name'] . "</br>";
			echo " id du commentaire : ". $comment['commentid'] . "</br>";
			echo " titre du commentaire : ". $comment['title'] . "</br>";
			echo " texte du commentaire : ". $comment['content'] . "</br>";
			echo " votes du commentaire : ". $comment['votes'] . "</br>";
			echo " date du commentaire : ". $comment['date'] . "</br>";
		?>
	</div>
	<?php 
	if (Auth::check()) {
		echo Form::open(array('action' => 'CommentsController@store'));
		echo Form::label('title', 'titre du commentaire');
		echo Form::text('title');
		echo Form::label('content', 'contenu');
		echo Form::textarea('content');
		echo Form::label('game_id', 'game_id');
		echo Form::text('game_id');
		echo Form::label('user_id', 'user_id');
		echo Form::text('user_id');
		echo Form::submit('Poster !');
		echo Form::close();
	}
	?>
	<?php } ?>
</div>

@endsection