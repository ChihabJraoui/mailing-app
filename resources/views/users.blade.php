@extends('layouts.app')

@section('content')

<div class="container-fluid">


	<fieldset class="optionBar">
		<ul class="nav nav-pills">


			<li id="tabToutUser" class="active pull-right">
				<a href="javascript:;">
					<span class="glyphicon glyphicon-th-list"></span>
					&nbsp;&nbsp;Liste Des Utilisateurs
				</a>
			</li>
		</ul>
	</fieldset>

	<!-- Users -->
	<div id="divToutUser">

		<div class="head"><span>Liste D\'utilisateurs : </span></div>

		<form role="form" action="" method="post" name="fToutUser">

			<table id="tableUser" align="center" class="tablesorter-blue table-striped table-bordered">
				<thead>
				<tr>
					<th>type d\'utilisateur</th>
					<th>Nom</th>
					<th>Prenom</th>
					<th>Domaine d\'activité</th>
					<th>Telephone</th>
					<th>Email</th>
					<th>Login</th>
					<th data-sorter="false" data-filter="false">Option</th>
				</tr>
				</thead>
				<tbody>';
				if($result->num_rows > 0)
				{
				while($r = $result->fetch_assoc())
				{


				echo'
				<tr align="center">';
					if($r["typeUser"] == 1)
					{
					echo'
					<td>Entreprise</td>
					<td>'.$r["Nom"].'</td>
					<td></td>';
					}
					else
					{
					echo'
					<td>Particulier</td>
					<td>'.$r["Nom"].'</td>
					<td>'.$r["Prenom"].'</td>';
					}
					echo'
					<td>'.$r["Domaine"].'</td>
					<td>'.$r["Tele"].'</td>
					<td>'.$r["Email"].'</td>
					<td>'.$r["Pseudo"].'</td>
					<td align="center">
						<a href="index.php?mode=profile&id='.$r["idUser"].'">Voir le Profile</a>
					</td>
				</tr>';
				}
				}
				else
				{
				echo'
				<tr>
					<td colSpan="5" align="center">Aucune Resultat !</td>
				</tr>';
				}
				echo'
				</tbody>
			</table>
		</form>

	</div>

</div>

@endsection

@push('scripts')

@endpush