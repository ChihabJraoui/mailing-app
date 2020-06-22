
<button id="btn-add-folder" type="button" class="btn btn-primary btn-action pull-right">
	<i class="material-icons">add</i>
	<span>Ajouter</span>
</button>

<h2 class="text-left">Dossiers</h2>

<table class="table middle">
	<tr>
		<th data-sorter="false" data-filter="false" width="30px">
			<input type="checkbox" id="AllDoss" class="checkAll">
		</th>
		<th colspan="">

		</th>
	</tr>

	@if($folders->count() > 0)
	@foreach($folders as $folder)

	<tr id="" align="center">
		<td>
			<input type="checkbox" name="idDosss[]" value="" />
		</td>
		<td class="text-left">
			{{ $folder->name }}
		</td>
		<td>

		</td>
		<td>
			{{ $folder->created_at }}
		</td>
		<td class="text-right">
			<div class="btn-group">
				<a href="#" class="btn btn-default">
					<i class="material-icons">edit</i>
				</a>
				<a href="#" class="btn btn-danger">
					<i class="material-icons">delete</i>
				</a>
			</div>
		</td>
	</tr>

	@endforeach
	@endif

</table>