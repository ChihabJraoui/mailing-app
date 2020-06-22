@extends('layouts.app')

@section('content')

<div class="container-fluid">

	<div class="breadcrumb">
		<i class="material-icons">home</i>
		Dashboard
	</div>

	<div class="row">
		<div class="col-sm-6 col-md-3">

			<div class="widget-stat">
				<div class="icon">
					<i class="material-icons">people</i>
				</div>
				<div class="info">
					<span>241</span>
					<h4>Clients</h4>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3">
			<div class="widget-stat">
				<div class="icon">
					<i class="material-icons">email</i>
				</div>
				<div class="info">
					<span>1042</span>
					<h4>Campaignes</h4>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3">
			<div class="widget-stat">
				<div class="icon">
					<i class="material-icons">home</i>
				</div>
				<div class="info">
					<span>230</span>
					<h4>Example</h4>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3">
			<div class="widget-stat">
				<div class="icon">
					<i class="material-icons">home</i>
				</div>
				<div class="info">
					<span>139</span>
					<h4>Example</h4>
				</div>
			</div>
		</div>
	</div>


	<div class="row">
		<div class="col-md-6">
			<!-- Added Clients -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<label>Client Ajoutés</label>
				</div>
				<div class="panel-body">
					<canvas id="clients-chart"></canvas>
				</div>
			</div>
		</div>
	</div>


	<div class="row">
		<div class="col-md-8">



		</div>

		<div class="col-md-4">

			<!-- Books -->
			<div class="panel panel-default">
				<div class="panel-heading">
					Les Carnets
				</div>
				<div class="panel-body">
					<canvas id="stat-books"></canvas>
				</div>
			</div>

			<!-- Collections -->
			<div class="panel panel-default">
				<div class="panel-heading">
					Les Collections
				</div>
				<div class="panel-body">
					<canvas id="stat-collections"></canvas>
				</div>
			</div>
		</div>
	</div>

</div>

@endsection

@push('scripts')

<script>
	$(document).ready(function()
	{
		new Chart("clients-chart", {
			type: 'bar',
			data: {
				labels: ["a", "b", "c", "d", "e", "f", 'g', 'h', 'j', 'k', 'l'],
				datasets: [{
					data: [12, 19, 3, 5, 2, 3, 9, 12, 22, 33, 44],
					backgroundColor: [
						'#73c6b6',
						'#73c6b6',
						'#73c6b6',
						'#73c6b6',
						'#73c6b6',
						'#73c6b6',
						'#73c6b6',
						'#73c6b6',
						'#73c6b6',
						'#73c6b6',
					]
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});


		new Chart("stat-books", {
			type: 'pie',
			data: {
				labels: ["Book 1", "Book 2", "Book 3"],
				datasets: [{
					label: 'Books',
					data: [12, 19, 3],
					backgroundColor: [
						'rgba(255, 99, 132, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(255, 206, 86, 0.2)'
					]
					//borderColor: [
					//	'rgba(255,99,132,1)',
					//	'rgba(54, 162, 235, 1)',
					//	'rgba(255, 206, 86, 1)',
					//	'rgba(75, 192, 192, 1)',
					//	'rgba(153, 102, 255, 1)',
					//	'rgba(255, 159, 64, 1)'
					//],
					//borderWidth: 1
				}]
			}
		});


		new Chart("stat-collections", {
			type: 'pie',
			data: {
				labels: ["Collection 1", "Collection 2", "Collection 3"],
				datasets: [{
					data: [120, 290, 39],
					backgroundColor: [
						'rgba(255, 29, 132, 0.2)',
						'rgba(54, 102, 235, 0.2)',
						'rgba(255, 206, 6, 0.2)'
					]
					//borderColor: [
					//	'rgba(255,99,132,1)',
					//	'rgba(54, 162, 235, 1)',
					//	'rgba(255, 206, 86, 1)',
					//	'rgba(75, 192, 192, 1)',
					//	'rgba(153, 102, 255, 1)',
					//	'rgba(255, 159, 64, 1)'
					//],
					//borderWidth: 1
				}]
			}
		});
	});
</script>

@endpush