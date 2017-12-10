@extends('layouts.mainlayout')

@section('content')
	<?php 
	if (Auth::check()) {
		echo Form::open(array('action' => 'CommentsController@store','class'=>'form-group'));
		echo Form::label('title', 'titre du commentaire',['class' => 'form-group']);
		echo Form::text('title',null,['class' => 'form-control']);
		echo Form::label('content', 'contenu',['class' => 'form-group']);
		echo Form::textarea('content',null,['class' => 'form-control']);
		echo Form::label('game_id', 'game_id',['class' => 'form-group']);
		echo Form::text('game_id',null,['class' => 'form-control']);
		echo Form::label('user_id', 'user_id',['class' => 'form-group']);
		echo Form::text('user_id',null,['class' => 'form-control']);
		echo Form::submit('Poster !',['class' => 'btn']);
		echo Form::close();
	}
	?>
	<?php foreach ($comments as $comment):?>
	<div class="jumbotron">	
		<div class="col-sm-5">
			<div class="panel panel-default">
				<div class="panel-heading">
					<strong><?php echo  $comment['name'] ;?></strong> <span class="text-muted">a commenté le <?php echo  $comment['date'] ;?> à <?php echo  $comment['hour']; ?></span>
				</div>
				<div class="panel-body">
					<ins><i><strong><?php echo  $comment['title'];?></strong></i></ins><br>
					<?php echo  $comment['content'] ;?>
				</div>
			</div>
		</div>


		<?php
			echo " id du commentaire : ". $comment['commentid'] . "<br>";
			echo " votes du commentaire : ". $comment['votes'] . "<br>";
			echo " date du commentaire : ". $comment['date'] . "<br>";
		?>
	</div>
	<?php endforeach ?>
	
	
</div>

@endsection