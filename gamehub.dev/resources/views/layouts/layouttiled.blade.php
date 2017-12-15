<div class="col-md-12 col-centered">
    @foreach ($games as $game)        
		<div class="col-md-3">
			<div class="thumbnail col-md-12">
				<div id="stars" class="starrr"></div>
				<img id="pocket" src="{{ secure_asset('img/pocket/'.$game->picture ) }}">
				<div class="caption">
				  <p>{{ $game->name }} </p>
				  <p>
				  @for ($i=0; $i < $game->grade; $i++) 
				  	<img src="{{ secure_asset('img/star.png') }}">
				  @endfor
				  </p>
				  <p><a class="btn btn-primary btn-lg" href=  "{{ route('route.infogame', $game->steam_id) }}"  id="info" >Info</a>
				  @if (in_array('add',$button))
				  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#windowadd" onclick=" setName(<?php echo "&quot;".$game->name."&quot;" ?>);">Add</button>
				  @elseif (in_array('transfer',$button))
				  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#windowadd" onclick=" setName(<?php echo "&quot;".$game->name."&quot;" ?>);">Transfer</button>
				  @endif
				  </p>
				</div>
			</div>
		</div>
	@endforeach
</div>

