@extends('layouts.app')

@section('content')

<div class="container-fluid">

	<form role="form" method="post" action="" id="fEnv" name="fEnv">

		<!-- Step 01 -->
		<div class="panel panel-default" id="step1">
			<div class="panel-heading">
				<h3> Etape 1 :</h3>
			</div>

			<div class="panel-body">
				<label>Selectionner un message : </label>
				<select class="form-control" name="selectMsg" id="selectMsg">
					<option value="">Message</option>
				</select>

				<button id="btnAperMsg" type="button" class="btn btn-info">Aperçu</button>
			</div>

			<div class="panel-footer">
				<ul class="pager">
					<li id="s1s"><a href="javascript:;">Suivant <span class="glyphicon glyphicon-chevron-right"></span></a></li>
				</ul>
			</div>
		</div>

		<!-- Step 02 -->
		<div class="panel panel-default" id="step2">
			<div class="panel-heading">
				<h3> Etape 2 :</h3>
			</div>
			<div class="panel-body">
				<label>L\'expediteur :</label>
				<select class="form-control" name="selectExped">
					<option value="0" selected disabled>Selectionner Un Expediteur :</option>
				</select>
			</div>
			<div class="panel-footer">
				<ul class="pager">
					<li id="s2p">
						<a href="#">
							<i class="material-icons">chevron_left</i>
							Precedant
						</a>
					</li>
					<li id="s2s"><a href="javascript:;">Suivant <span class="glyphicon glyphicon-chevron-right"></span></a></li>
				</ul>
			</div>
		</div>

		<!-- Step 03 -->
		<div class="panel panel-default" id="step3">
			<div class="panel-heading">
				<h3>Etape 3 :</h3>
			</div>

			<div class="panel-body">
				<label>Choisissez le Carnet :</label>
				<select class="form-control" id="sCarnet">
					<option value="0" selected="true" disabled="disabled">Selectionner Un Carnet :</option>
					<option value="'.$rCarnet["idCarnet"].'">'.$rCarnet["Nom"].'</option>
				</select>
			</div>

			<div class="panel-footer">
				<ul class="pager">
					<li id="s3p"><a href="javascript:;"><span class="glyphicon glyphicon-chevron-left"></span> Precedant</a></li>
					<li id="s3s"><a href="javascript:;">Suivant <span class="glyphicon glyphicon-chevron-right"></span></a></li>
				</ul>
			</div>
		</div>


		<!-- Step 04 -->
		<div id="step4" class="panel panel-default">
			<div class="panel-heading">
				<div class="num-etape">4</div>
				<span>4<sup>ème</sup> Etape :</span>
			</div>

			<div class="panel-body">

				<h3 class="text-info">Quand ?</h3><hr>
				<div class="radio">
					<label class="inline-radio">
						<input id="dateEnv1" type="radio" name="dateEnv" value="0"
					                                    onchange="checkDate()" checked>Maintenant</label> &nbsp;&nbsp;&nbsp;
					<label class="inline-radio">
						<input id="dateEnv2" type="radio" name="dateEnv" value="1" onchange="checkDate()">Choisir la Date</label>
				</div>

				<div id="divDateTime" style="display: none;">
					<input type="text" id="datetime" name="datetime">
				</div>

			</div>

			<div class="panel-footer">
				<ul class="pager">
					<li id="s4p"><a href="javascript:;"><span class="glyphicon glyphicon-chevron-left"></span> Precedant</a></li>
					<li id="btnEnvoyerMessage">
						<a href="javascript:;">Envoyer</a>
					</li>
				</ul>
			</div>
		</div>

		<!-- LOADING -->
		<div id="loading" class="panel panel-default">
			<div class="panel-heading">
				<h3>Envoi En Cours : </h3>
			</div>

			<div class="panel-body">
				<div class="progress progress-striped">
					<div id="pro" class="progress-bar progress-bar-info" role="progressbar"
					     data-transitiongoal="0"></div>
				</div>

			</div>

			<div class="panel-footer">
				<button id="btnTerminer" class="btn btn-warning pull-right">Terminé</button>
			</div>
		</div>

	</form>

</div>


@endsection