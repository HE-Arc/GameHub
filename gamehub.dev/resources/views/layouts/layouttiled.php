
<div class="col-md-12 col-centered">
	<?php
       foreach ($games as $game) {
           $url = '/infogame/'.$game->steam_id; ?>
	<div class="col-md-3">
		<div class="thumbnail col-md-12">
			<img id="pocket" src=<?php echo asset("img/pocket/$game->picture"); ?> >
			<div class="caption">
			  <p><?php echo $game->name; ?></p>
			  <p> <?php for ($i=0; $i < $game->average_grade; $i++) { 
			  	?><img src=<?php echo asset('img/star.png'); ?>><?php } ?></p>
			  <p><a class="btn btn-primary btn-lg" href= <?php echo route('route.infogame', $game->steam_id) ?> id="info" >Info</a>
			  	<a class="btn btn-primary btn-lg" href=<?php echo route('addGame', $game->steam_id) ?> id="info">Add</a></p>
			</div>
		</div>
	</div>
	<?php
       }
    ?>
</div>


