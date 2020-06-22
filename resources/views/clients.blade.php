@extends('layouts.app')

@section('content')

<div class="container-fluid">

	<ul class="nav nav-tabs">
		<li id="tabRechercher" class="active pull-right">
			<a href="#search">Rechercher des Clients</a>
		</li>
		<li class="pull-right">
			<a href="#books">Les Carnets</a>
		</li>
	</ul>

	<div class="tab-content">

		<!-- search -->
		<div id="search" class="tab-pane fade in active">
			<form role="form" action="" method="post" name="fSearch">
				<input type="hidden" name="idUser" value="'.$idUser.'">

				<div class="form-group">
					<div class="radio" style="text-align: center;">
						<label class="inline-radio"><input name="typeClient" type="radio" value="0" checked>Tous</label>&nbsp;&nbsp;
						<label class="inline-radio"><input name="typeClient" type="radio" value="1">Entreprise</label>&nbsp;&nbsp;
						<label class="inline-radio"><input name="typeClient" type="radio" value="2">Particulier</label>&nbsp;&nbsp;
					</div>
					<div id="search" class="form-group">
						<input id="txtSearch" name="txtSearch" type="text" class="form-control"
							   placeholder="Nom ou Prenom ou Email ...">
					</div>
				</div>
			</form>

			<!-- Resultat de Recherche -->
			<div id="result" style="overflow: auto; max-height: 500px;"></div>
		</div>

		<!-- Les Carnets -->
		<div id="books" class="tab-pane fade"></div>
	</div>

</div>

@endsection

@push('scripts')
<script src="{{ asset('js/_clients.js') }}"></script>
@endpush