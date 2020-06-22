
@extends('layouts.app')

@section('auth')

<div class="container-fluid">
	<div class="row">

		@include('auth.slideshow')

		<div class="col-md-6 section-login">

			@if ($errors->count() > 0)
				@foreach($errors->all() as $error)
				<div>
					{{ $error }}
				</div>
				@endforeach
			@endif

			<form method="post" action="{{ route('login') }}">

				{{ csrf_field() }}

				<div class="panel panel-default">
					<div class="panel-body">
						<div class="form-group text-center">
							<img src="{{ asset('img/avatar.png') }}" class="img-circle" height="100">
						</div>
						<div class="form-group">
							<input type="text" name="username" class="form-control"
							       placeholder="Nom d'utilisateur" />
						</div>
						<div>
							<input type="password" name="password" class="form-control"
							       placeholder="Mot de Passe" />
						</div>
					</div>
					<div class="panel-footer text-center">
						<div class="checkbox">
							<label>
								<input type="checkbox" name="remember" /> Rester Connecté
							</label>
						</div>
						<button type="submit" class="btn btn-primary">Se connecter</button>
					</div>
				</div>
			</form>

			<p>
				<a href="/reset-password">Mot de passe oublié ?</a> |
				<a href="/register">S'inscrire</a>
			</p>

		</div>
	</div>
</div>

@endsection

@push('slideshow')
<script src="{{ asset('js/_slideshow.js') }}"></script>
@endpush