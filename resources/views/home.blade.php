@extends('layouts.app')

@section('content')
<div class="container">
<link type="text/css" rel="stylesheet" href="css/barraNavegacionVertical.css" />
        <div class="row">        
          <div class="col">
            
          </div>
          <div class="col-5">
            <!--// Creamos un titulo y cuando demos click en el boton nos aparecera un nuevo sitio -->  
                <h3>HOME USER SUPER_ADMIN</h3>                
            <div class="panel-body" >
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <ul class="list-group">
            <!--//con esto le pasamos a el controlador index que nos muestre la vista del home de usuarios -->
            <li class="list-group-item active"><a href="{{action('UserController@index')}}">Administrar Usuarios</a></li>
            <li class="list-group-item"><a href="{{action('AuditorioController@index')}}">Administrar Auditoríos</a></li>
            <li class="list-group-item"><a href="{{action('ReservaController@index')}}">Administrar reservas</a></li>
            <li class="list-group-item"><a href="{{action('EventoController@index')}}">Administrar eventos</a></li>
            <li class="list-group-item"><a href="{{action('AcercaDeController@index')}}">Acerca de </a></li>
            </ul>
                
            {{ Auth::user()->isAdmin() }}                    
                </div>          
          <div class="col">
            
          </div>
        </div>
      </div>
@endsection
