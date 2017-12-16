<div class="col-md-12 col-centered">
    @foreach ($games as $game)        
		<div class="col-md-3">
			<div class="thumbnail col-md-12">
				<div id="stars" class="starrr"></div>
				<img id="pocket" src="{{ secure_asset('img/pocket/'.$game->picture ) }}">
				<div class="caption">
				  <p>{{ $game->name }} </p>
				  <p>
				  @if (in_array('star',$parameter))
					  @for ($i=0; $i < $game->grade; $i++) 
					  	<img src="{{ secure_asset('img/star.png') }}">
					  @endfor
				  @endif
				  </p>
				  <p><a class="btn btn-primary btn-lg" href=  "{{ route('route.infogame', $game->id) }}"  id="info" >Info</a>
				  	@auth
					  @if (in_array('toplayedlist',$parameter))
					  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#windowadd" onclick=" setName(<?php echo "&quot;".$game->name."&quot; , ".$game->id ?>);">Playedlist</button>
					  @endif
					  @if (in_array('towishlist',$parameter))
					  <a class="btn btn-primary btn-lg" href=  "{{ route('route.addtowishlist', $game->id) }}"  id="addwishlist" >Wishlist</a>
					  @endif
					  @if (in_array('delete',$parameter))
					  <a class="btn btn-primary btn-lg" href=  "{{ route('route.deletegame', $game->id) }}"  id="deletegame" >Delete</a>
					  @endif
					@endauth
				  </p>
				</div>
			</div>
		</div>
	@endforeach
</div>

