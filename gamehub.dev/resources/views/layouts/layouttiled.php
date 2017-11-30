
<div class="col-md-12 col-centered">
	<?php
       foreach ($games as $game) 
       {
       		$url = "/infogame/".$game->steam_id;
            ?>
	<div class="col-md-3">
		<div class="jumbotron col-md-12">
		  <h2><?php echo $game->name; ?></h2>
		  <a href= <?php echo route('route.infogame', $game->steam_id) ?> id="info" >Info</a>
		</div>
	</div>
	<?php
        }
    ?>
</div>


