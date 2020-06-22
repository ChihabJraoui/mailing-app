
@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-offset-4 col-md-4">

            <h3 class="title">Média Sociaux</h3>
            <ul class="social-media">
                <li>
                    <a href="#">
                        <i class="fa fa-fw fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-fw fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-fw fa-google-plus"></i>
                    </a>
                </li>
            </ul>

        </div>
        <div class="col-md-4">

            <h3>Informations</h3>
            <div class="site-info">
                <i class="material-icons">place</i>
                <span>Massira 1A, N° 422, 2è étage, ( à coté de la librairie Zerktouni), Marrakech.</span><br>
                <i class="material-icons">phone</i>
                <span>Tél : +212 (0) 670 957 120</span><br>
                <i class="material-icons">phone</i>
                <span>Fixe : +212 (0) 524 492 905</span>
            </div>

        </div>
    </div>
</div>

@endsection
