<!DOCTYPE html>
<html lang="fr">
<head>
	<title>FSD Mailing: Application d'envoi d'email et SMS</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	{{-- Google Fonts & Material Icons --}}
	<link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Courgette|Open+Sans:200,400,600" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">

	@if (App::environment('local'))
	<link href="{{ asset('vendors/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('vendors/datetimepicker.css') }}" rel="stylesheet">
	<link href="{{ asset('vendors/owl.carousel.css') }}" rel="stylesheet">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	@endif

</head>
<body>

{{-- header --}}
@if(!Auth::guest())
<header class="header">

	<!-- button open sidebar -->
	<a href="#" class="btn-toggle pull-left" id="btn-open-sidebar">
		<i class="material-icons">menu</i>
	</a>

	<!-- brand -->
	<a href="{{ route('homeView') }}" class="brand">
		FSD Mailing
	</a>

	<!-- navigation -->
	<ul class="navigation pull-right">
		<li>
			<a href="#">
				<i class="material-icons">notifications_none</i>
			</a>
		</li>
		<li>
			<a href="#">
				<i class="material-icons">message</i>
			</a>
		</li>
		<li>
			<a href="{{ route('profileView') }}">
				<img src="{{ Auth::user()->getAvatar() }}" height="42" width="42" class="img-circle" />
			</a>
		</li>
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				<i class="material-icons">more_vert</i>
			</a>
			<ul class="dropdown-menu dropdown-menu-right">
				<li>
					<a href="#">
						<i class="material-icons">settings</i>
						Configuration
					</a>
				</li>
				<li class="divider"></li>
				<li>
					<a onclick="logoutForm.submit()" href="#">
						<i class="material-icons">power_settings_new</i>
						Se Deconnecter
					</a>
					<form name="logoutForm" action="{{ route('logout') }}" method="post">
						{{ csrf_field() }}
					</form>
				</li>
			</ul>
		</li>
	</ul>
</header>
@endif

{{-- sidebar --}}
@if(!Auth::guest())
<nav class="sidebar">
	<ul class="sidebar-menu">
		<li class="heading">Overview</li>
		<li class="{{ Route::currentRouteName() == 'homeView' ? 'active' : '' }}">
			<a href="{{ route('homeView') }}">
				<i class="material-icons">dashboard</i> Acceuil
			</a>
		</li>
		<li class="{{ Route::currentRouteName() == 'campaignsView' ? 'active' : '' }}">
			<a href="{{ route('campaignsView') }}">
				<i class="material-icons">email</i> Campaignes
			</a>
		</li>
		<li class="{{ Route::currentRouteName() == 'clientsView' ? 'active' : '' }}">
			<a href="{{ route('clientsView') }}">
				<i class="material-icons">people</i> Clients
			</a>
		</li>

		@if(Auth::user()->is_admin)

		<li class="heading">Administrateur</li>

		<li class="{{ Request::is('') ? 'active' : '' }}">
			<a href="{{ route('usersView') }}">
				<i class="material-icons">people</i> Utilisateurs
			</a>
		</li>

		@endif

		<li class="heading">Autre</li>
		<li>
			<a href="{{ route('aboutView') }}">
				<i class="material-icons">info</i>
				A Propos
			</a>
		</li>
	</ul>
</nav>

<div class="background-overlay"></div>
@endif

{{-- Content --}}
@if(Auth::guest())
<main class="layout-auth">
	@yield('auth')
</main>
@else
<main class="layout-app">
	@yield('content')
</main>
@endif

@if(!Auth::guest())
<footer class="footer">
	<div class="container-fluid">
		<div class="copyright">
			FSD Mailing &copy; 2014 - <?= date("Y") ?>. tous les droits sont réservés.
		</div>
	</div>
</footer>
@endif

@if(App::environment('local'))
<script src="{{ asset('lib/jquery-1.11.2.min.js') }}"></script>
<script src="https://use.fontawesome.com/2670d45d53.js"></script>
<script src="{{ asset('vendors/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendors/jb.min.js') }}"></script>
<script src="{{ asset('vendors/msg.js') }}"></script>
<script src="{{ asset('vendors/owl.carousel.min.js') }}"></script>
<script src="{{ asset('vendors/Chart.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
@stack('scripts')
@stack('slideshow')
@endif

</body>
</html>