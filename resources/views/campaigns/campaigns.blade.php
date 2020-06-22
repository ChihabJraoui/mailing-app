
<button class="btn btn-primary btn-action pull-right">
	<i class="material-icons">add</i>
	<span>Ajouter</span>
</button>

<h2 class="text-left">Campaignes</h2>

<table class="table table-middle">
	<tr>
		<th data-sorter="false" data-filter="false" width="30px">
			<input type="checkbox" id="AllMsgs">
		</th>
		<th colspan="2">
			<div class="dropdown pull-left">
				<button class="btn btn-default" data-toggle="dropdown">
					Dossiers
					<i class="material-icons">arrow_drop_down</i>
				</button>
				<ul class="dropdown-menu">
					<li>
						<a href="#">Tous</a>
					</li>
				</ul>
			</div>
			<div class="pull-right">
				<button id="btnSuppToutMsg" class="btn btn-default disabled">
					<i class="material-icons">delete</i>
					<span>Supprimer</span>
				</button>
			</div>
		</th>
	</tr>

	@if ($campaigns->count() > 0)

	@foreach($campaigns as $campaign)

	<tr id="msg-{{ $campaign->id }}" align="center">
		<td>
			<input type="checkbox" name="idMsgs[]" value="{{ $campaign->id }}" />
		</td>
		<td class="text-left">
			<h4>{{ $campaign->title }}</h4>
		</td>
		<td class="text-right">
				<div class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="material-icons">more_vert</i>
					</a>
					<ul class="dropdown-menu dropdown-menu-right">
						<li>
							<a href="#">Delete</a>
						</li>
					</ul>
				</div>
		</td>
	</tr>

	@endforeach

	@else

	<tr>
		<td colSpan="3" align="center">Aucun Message.</td>
	</tr>

	@endif

</table>

<div class="text-center">
	{{ $campaigns->links() }}
</div>