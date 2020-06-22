@extends('layouts.app')

@section('content')

<div class="container-fluid">


	<h3></h3>

	<div class="row">
		<div class="col-md-3">
			<div>
				<img src="{{ Auth::user()->getAvatar() }}" class="img-thumbnail img-circle" />
			</div>
			<div>
				<h3>{{ Auth::user()->getFullname() }}</h3>
			</div>
		</div>

		<div class="col-md-9">
			<form role="form" action="" method="post" id="fProfile" name="fProfile">

				<table align="center" width="100%" class="table">
					<tr>
						<td width="30%">Le Nom d\'utilisateur : </td>
						<td align="left">{{ Auth::user()->username }}</td>
					</tr>
					<tr>
						<td>Domaine d\'activité : </td>
						<td align="left"></td>
					</tr>
					<tr>
						<td>Email : </td>
						<td align="left"></td>
					</tr>
					<tr>
						<td>Telephone : </td>
						<td align="left"></td>
					</tr>
				</table>
			</form>
		</div>
	</div>

</div>

@endsection

@push('scripts')

@endpush
