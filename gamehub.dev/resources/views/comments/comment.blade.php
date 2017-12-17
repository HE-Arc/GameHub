@extends('layouts.mainlayout')

@section('content')

		<h1 id="gameTitle">
			{{$game->name}}
		</h1>
		<img id="pocket" class="center-block" src="{{ secure_asset('img/pocket/'.$game->picture ) }}"/>
		<br>
		<p class="text-center">
			@for ($i=0; $i < $game->grade; $i++) 
				<img src="{{ secure_asset('img/star.png') }}">
			@endfor
		</p>
	<h3>Comments</h3>
	<?php 
	if (Auth::check()) {
		echo Form::open(array('action' => 'CommentsController@store','class'=>'form-group'));
		echo Form::hidden('game_id', $game->id);
		echo Form::label('title', 'Title',['class' => 'form-group']);
		echo Form::text('title',null,['class' => 'form-control','placeholder'=>'Chose a title for your comment ... ']);
		echo Form::label('content', 'Comment',['class' => 'form-group']);
		echo Form::textarea('content',null,['class' => 'form-control','placeholder'=>'Write your comment here ... ']);
		echo Form::submit('Submit !',['class' => 'btn']);
		echo Form::close();
	}
	?>
	<br>
	<?php foreach ($comments as $comment):?>
		<div class="col-sm-7">
			<div class="panel panel-default">
				<div class="panel-heading">
					<strong><?php echo  $comment['name'] ;?></strong> <span class="text-muted">commented on <?php echo  $comment['date'] ;?> at <?php echo  $comment['hour']; ?></span>
				</div>
				<div class="panel-body" >
					<h5 id="comment_title"><?php echo  $comment['title'];?></h5><br>
					<?php echo  $comment['content'] ;?>
				</div>
				<div class="panel-footer" id="<?php echo $comment['commentid']; ?>">
					<span class="like"><?php echo  $comment['votes'] ;?></span>
					<span class="glyphicon glyphicon-plus <?php if($comment['voteStatus']=='1'){echo "uservoteplus";}else if ($comment['voteStatus']=='-1'){echo "uservoteminus";}?>"></span>
					<span class="glyphicon glyphicon-minus <?php if($comment['voteStatus']=='1'){echo "uservoteplus";}else if ($comment['voteStatus']=='-1'){echo "uservoteminus";} ?>" ></span>
				</div>
			</div>
		</div>
	<?php endforeach ?>
	
	
</div>
<div class="myAlert-bottom  alert alert-danger hide"></div>
@endsection
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".glyphicon.glyphicon-plus, .glyphicon.glyphicon-minus").click(function(){
			let user_note=0;
			let comment_div_id = $(event.target).closest('div').attr('id');
			let target = $(event.target);
			if(target.hasClass('glyphicon glyphicon-plus')){
				user_note=1;
			}else if(target.hasClass('glyphicon glyphicon-minus')){
				user_note=-1;
			}
			var data = {note: user_note};
			$.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
			$.ajax({
                type: "GET",
                url: "/comments/vote/"+comment_div_id,
                dataType: 'JSON',
                data: data, 
                success: function(data) {
                	if(target.hasClass('glyphicon-plus') && target.hasClass('uservoteplus')){
                		user_note = 0;
                	}else if (target.hasClass('glyphicon-minus') && target.hasClass('uservoteminus')){
                		user_note = 0;
                	}else if (target.hasClass('glyphicon-plus') && target.hasClass('uservoteminus')){
                		user_note = 2;
                		$("#"+comment_div_id).children(".glyphicon").removeClass('uservoteminus');
                		$("#"+comment_div_id).children(".glyphicon").addClass('uservoteplus');
                	}else if (target.hasClass('glyphicon-minus') && target.hasClass('uservoteplus')){
                		user_note = -2;
                		$("#"+comment_div_id).children(".glyphicon").removeClass('uservoteplus');
                		$("#"+comment_div_id).children(".glyphicon").addClass('uservoteminus');
                	}else if (target.hasClass('glyphicon-minus')){
                		$("#"+comment_div_id).children(".glyphicon").addClass('uservoteminus');
                	}else if (target.hasClass('glyphicon-plus')){
                		$("#"+comment_div_id).children(".glyphicon").addClass('uservoteplus');
                	}
                	updateNbVote(comment_div_id,user_note);
       			},
        		error: function(data) {
           			if(data['responseText']=='login'){
           				$(".myAlert-bottom").text("you need to be logged in")
           			}else{
           				$(".myAlert-bottom").text("query error")
           			}
           			$(".myAlert-bottom").removeClass('hide');
  						setTimeout(function(){
   							 $(".myAlert-bottom").addClass('hide'); 
  						}, 2000);
        		}
            });
		})
	})
function updateNbVote(commentId, voteDiff) {
	if(voteDiff != 0){
    	span = $("#"+commentId).children(".like");
    	span.text(parseInt(span.html(), 10) + voteDiff);
    	span.removeClass("like");
    	span.addClass("zoomIn animated");
    	setTimeout(function(){
  			span.removeClass("zoomIn animated");
  			span.addClass("like");
		}, 500);	
    }
}

</script>
@endsection
