@extends('layouts.app')

@section('content')

<div class="container-fluid full-height">

	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		<li class="active">
			<a href="#campaigns" role="tab" data-toggle="tab">Campaignes</a>
		</li>
		<li>
			<a href="#folders" role="tab" data-toggle="tab">Dossiers</a>
		</li>
	</ul>


	<div class="tab-content">

		<!-- Campaigns -->
		<div id="campaigns" class="tab-pane fade in active"></div>

		<!-- Les Dossiers -->
		<div id="folders" class="tab-pane fade"></div>

	</div>

</div>

@endsection

@push('scripts')

	<script src="{{ asset('js/_campaigns.js') }}"></script>

@endpush