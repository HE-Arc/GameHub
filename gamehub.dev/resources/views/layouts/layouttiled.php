
<div class="col-md-12 col-centered">
	<?php
       foreach ($games as $game) {
           $url = '/infogame/'.$game->steam_id; ?>
	<div class="col-md-3">
		<div class="thumbnail col-md-12">
			<img id="pocket" src=<?php echo asset("img/pocket/$game->picture"); ?> >
			<div class="caption">
			  <p><?php echo $game->name; ?></p>
			  <p> <?php for ($i=0; $i < $game->grade; $i++) { 
			  	?><img src=<?php echo asset('img/star.png'); ?>><?php } ?></p>
			  <p><a class="btn btn-primary btn-lg" href= <?php echo route('route.infogame', $game->steam_id) ?> id="info" >Info</a>
			  	
			  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Add</button>

			  </p>
			</div>
		</div>
	</div>
	<?php
       }
    ?>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Add game</h4>
      </div>
      <div class="modal-body">
        <input type="hidden" id="noteFilmChoisi" name="noteChoisi" value="0"></input>
					<button type="button" class="btn btn-default dropdown-toggle col-lg-12" id="buttonRating" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Note <span class="caret"></span>
					</button>
					<ul class="dropdown-menu col-lg-12">
						<li>
							<?php for ($j=0; $j < 6; $j++) { 
								?>
							<a onclick="setStarChoose(this,<?php echo $j+1 ?>);" value=<?php echo $j+1 ?>>
								<?php for ($i=0; $i < $j; $i++) 
								{ 
			  					?>
			  					<img src=<?php echo asset('img/star.png'); ?>>
			  					<?php } ?>
			  				</a>
			  				<?php } ?>

			  			</li>
						
					</ul>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a class="btn btn-primary btn-lg" href="">Add to wishlist</a>
        <a class="btn btn-primary btn-lg" href="">Add to playedlist</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<script type="text/javascript">
$('#myModal').on('shown.bs.modal', function () {
	alert("test");
  $('#myInput').focus();
})

function setStarChoose(elem, nombre)
		{
			document.getElementById("buttonRating").innerHTML=elem.innerHTML+' <span class="caret"></span>';
			document.getElementById("noteFilmChoisi").value=nombre;
		}
</script>