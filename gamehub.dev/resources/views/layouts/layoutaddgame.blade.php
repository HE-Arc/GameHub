<div class="modal fade" tabindex="-1" role="dialog" id="windowadd">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="text-center">
        	<h2 class="modal-title" id="titlegame">Add game</h2>
        </div>
        
      </div>
      <div class="modal-body">
	      	<div class="row">
	      		<div class="col-md-3">
	      			<h4>Rating</h4>
	      		</div>
	      		<div class="col-md-6 text-center">
		      	<select id="rating">
				  <option value="1">1</option>
				  <option value="2">2</option>
				  <option value="3">3</option>
				  <option value="4">4</option>
				  <option value="5">5</option>
				</select>
				</div>
			</div>
			<div class="row modal-footer">
				<div class="col-md-2">
				<button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Close</button>
				</div>
				@if ($wishlist == true)
				<div class="col-md-offset-2 col-md-4">
					<a class="btn btn-primary btn-lg" href="">Add to wishlist</a>
				</div>
				<div class="col-md-4">
				<a class="btn btn-primary btn-lg" href="">Add to playedlist</a>
				</div>
				@else
				<div class="col-md-4 col-md-offset-6">
				<a class="btn btn-primary btn-lg" href="">Add to playedlist</a>
				</div>
				@endif
				
			</div>
  		</div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
function setName(name)
{
	var element=document.getElementById("titlegame");
	element.innerHTML=name;
}
</script>