<ul>
  @foreach ($usergames as $usergame)
    <li>
      <a href="{{route('usergames.show', $usergame)}}">
        {{$usergame->game_id}}
      </a>
    </li>
  @endforeach
</ul>
