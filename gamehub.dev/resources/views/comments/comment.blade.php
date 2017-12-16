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
				<div class="panel-footer" id="<?php echo $comment['commentid']; ?>">
					<span class="like"><?php echo  $comment['votes'] ;?></span>
					<span class="glyphicon glyphicon-plus"></span>
					<span class="glyphicon glyphicon-minus" ></span>
				</div>
			</div>
		</div>
	<?php endforeach ?>
	
	
</div>
@endsection
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".glyphicon.glyphicon-plus, .glyphicon.glyphicon-minus").click(function(){
			let user_note=0;
			let comment_div_id = $(event.target).closest('div').attr('id');
			if($(event.target).attr('class')=='glyphicon glyphicon-plus'){
				user_note=1;
			}else if($(event.target).attr('class')=='glyphicon glyphicon-minus'){
				user_note=-1;
			}
			var data = {note: user_note, comment_id:comment_div_id};
			$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
			$.ajax({
                type: "POST",
                url: "/comments/vote",
                dataType: 'JSON',
                data: data, 
                success: function(data) {
                	span = $("#"+comment_div_id).children(".like");
                	span.text(parseInt(span.html(), 10) + user_note);
                	span.removeClass("like");
                	span.addClass("zoomIn animated");
            		setTimeout(function(){
  						span.removeClass("zoomIn animated");
  						span.addClass("like");
					}, 500);
            		
       			},
        		error: function() {
           			alert('Error occured');
        		}
            });
		})
	})
</script>
@endsection
