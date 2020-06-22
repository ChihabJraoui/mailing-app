
@extends('layouts.app')

@section('auth')

<div class="container-fluid">
	<div class="row">

		@include('auth.slideshow')

		<div class="col-xs-12 col-md-6">

			@if($errors->count() > 0)
				@foreach($errors->all() as $error)
					<div>
						{{ $error }}
					</div>
				@endforeach
			@endif

			<form id="registerForm" role="form" action="{{ route('register') }}" method="post">

				{{ csrf_field() }}

				<div class="panel panel-default">
					<div class="panel-body">

						<div class="form-group">
							<label for="username">Nom d'utilisateur</label>
							<input type="text" id="username" name="username" class="form-control"
							       required />
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" id="email" name="email" class="form-control"
							       required />
						</div>
						<div class="form-group">
							<label for="pass1">Mot de Passe</label>
							<input type="password" id="pass1" name="password" class="form-control"
							       required />
						</div>
						<div class="form-group">
							<label for="pass2">Confirmation de Mot de Passe</label>
							<input type="password" id="pass2" name="confirm_password" class="form-control"
							       required />
						</div>
						<div class="form-group">
							<label for="phone">N° de Telephone</label>
							<input type="tel" id="phone" name="phone" class="form-control"
								   required />
						</div>
						<div class="form-group text-center">
							<label class="radio-inline">
								<input type="radio" name="type" value="personal" checked />Particulier
							</label>
							<label class="radio-inline">
								<input type="radio" name="type" value="company" />Entreprise
							</label>
						</div>

					</div>
					<div class="panel-footer text-center">
						<button id="btnRegister" type="submit" class="btn btn-primary">S'inscrire</button>
					</div>
				</div>
			</form>

			<p>
				Vous avez déja un compte ? <a href="/login">connectez-vous</a>
			</p>

		</div>
	</div>
</div>

@endsection

@push('scripts')

<script src="{{ asset('js/_slideshow.js') }}"></script>
<script>
	$(document).ready(function()
	{
		// Form Validation

		$('#registerForm').on('submit', function(e)
		{
			e.preventDefault();

			var pass1 = $('#pass1');
			var pass2 = $('#pass2');

			if(pass1.val() != pass2.val())
			{
				pass2.parent().addClass('has-error')
					.append('<span class="text-danger">Mot de passe n\'est identique</span>');

				return false;
			}
			else
			{
				if(pass2.parent().hasClass('has-error'))
				{
					pass2.parent().removeClass('has-error');
					pass2.parent().find('span').remove();
				}
			}

			$(this)[0].submit();
		});
	});
</script>

@endpush