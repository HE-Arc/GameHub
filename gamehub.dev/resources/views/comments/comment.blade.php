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
	<?php } ?>
</div>

@endsection