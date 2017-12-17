<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ secure_asset('img/logo2.png') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
	<title>GameHub</title>


	<link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ secure_asset('css/style.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ secure_asset('css/fontawesome-stars.css') }}">

</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" id="navigationBar">
	  <div class="container col-md-12">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header col-md-9">
	    	<div>
	    		 <form class="navbar-form navbar-left ">
	      		<button type="button" id="sidebarCollapse" class="btn btn-primary btn-lg">Menu</button>
	      		</form>
	      		<a href="{{ secure_asset('/') }}" id="siteTitle">GameHub</a>
	 	 	</div>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	 	 	<div class="col-md-3">
		      <form class="navbar-form navbar-left " method="POST" action="{{ route('route.search') }}">
		      	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		        <div class="form-group">
		          <input type="text" name="name" class="form-control" placeholder="Search Game">
		        </div>
		        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
		      </form>
	      	</div>

	  </div><!-- /.container-fluid -->
</nav>

<div class="wrapper" id="wrapper">
	<nav id="sidebar">
		<div class="sidebar-header">
            <h3>Menu</h3>
        </div>
        <!-- Sidebar Links -->
        <ul class="list-unstyled components">
        	<li><a href="{{ secure_asset('/') }}">Mainpage</a></li>
            @guest
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
								<li><a href="{{ route('auth.steam') }}">Steam</a></li>
            @else
				<li><a href="{{ route('route.wishlist') }}">Wishlist</a></li>
				<li><a href="{{ route('route.playedlist') }}">Playedlist</a></li>
				<li><a href="{{ route('route.index')}}">User info</a></li>

                <li>
                    <a  href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout
                      </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                </li>
            @endguest
        </ul>
	</nav>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit User</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('route.index') }}"> Back</a>
        </div>
    </div>
</div>

{!! Form::model($user, ['method' => 'POST','route' => ['route.update']]) !!}
  <div class="row">
    <div class="col-sm-10">
			<div class"form-group">
				<strong>Name :</strong>
				{!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
			</div>
		</div>
    <div class="col-sm-10">
			<div class"form-group">
				<strong>Email :</strong>
				{!! Form::email('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
  		</div>
		</div>
    <div class="col-sm-10">
			<div class"form-group">
				<strong>Password :</strong>
				{!! Form::password('password', null, array('placeholder' => 'Password','class' => 'form-control')) !!}
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 text-center">
					<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>
{!! Form::close() !!}


<script src="{{ secure_asset('js/app.js') }}"></script>
<script src="{{ secure_asset('js/jquery.barrating.min.js') }}"></script>
<script src="{{ secure_asset('js/ratingbarstar.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"

                });

                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar, #siteContent').toggleClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });

                $('#sidebar').toggleClass('active');
            });

</script>
</body>
</html>
