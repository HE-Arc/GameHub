@extends('layouts.mainlayout')

@section('content')
	<?php 
	if (Auth::check()) {
		echo Form::open(array('action' => 'CommentsController@store','class'=>'form-group'));
		echo Form::hidden('game_id', $game_id);
		echo Form::label('title', 'titre du commentaire',['class' => 'form-group']);
		echo Form::text('title',null,['class' => 'form-control']);
		echo Form::label('content', 'contenu',['class' => 'form-group']);
		echo Form::textarea('content',null,['class' => 'form-control']);
		echo Form::submit('Poster !',['class' => 'btn']);
		echo Form::close();
	}
	?>
	<?php foreach ($comments as $comment):?>
		<div class="col-sm-7">
			<div class="panel panel-default">
				<div class="panel-heading">
					<strong><?php echo  $comment['name'] ;?></strong> <span class="text-muted">a commenté le <?php echo  $comment['date'] ;?> à <?php echo  $comment['hour']; ?></span>
				</div>
				<div class="panel-body" >
					<h5 id="comment_title"><?php echo  $comment['title'];?></h5><br>
					<?php echo  $comment['content'] ;?>
				</div>
				<div class="panel-footer">
					<?php echo  $comment['votes'] ;?>
					<span class="glyphicon glyphicon-plus" id="upvote"></span>
					<span class="glyphicon glyphicon-minus" id="downvote"></span>
				</div>
			</div>
		</div>
		<?php
			/*echo " id du commentaire : ". $comment['commentid'] . "<br>";*/
		?>
	<?php endforeach ?>
	
	
</div>
@endsection
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#upvote").click(function(){
			var data = {note: 1, comment_id:1};
			$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
			$.ajax({
                type: "POST",
                url: "http://gamehub.dev/comments/1",
                dataType: 'JSON',
                data: data,
            });
		})
	})
</script>
@endsection