@extends('layouts.app')

@section('content')
<div class="container">
        <link type="text/css" rel="stylesheet" href="css/barraNavegacionVertical.css" />
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div style="color:steelblue"class="panel-heading">HOME USER SUPER_ADMIN</div>

                <div class="panel-body" >
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

        <ul>
               <!--//con esto le pasamos a el controlador index que nos muestre la vista del home de usuarios -->
        <li><a class="active" href="{{action('UserController@index')}}">Administrar Usuarios</a></li>
        <li><a href="{{action('AuditorioController@index')}}">Administrar Auditoríos</a></li>
        <li><a href="{{action('ReservaController@index')}}">Administrar reservas</a></li>
        <li><a href="{{action('AcercaDeController@index')}}">Acerca de </a></li>
       </ul>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
