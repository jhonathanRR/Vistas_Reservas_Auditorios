@extends('layouts.app')

@section('content')
<div class="container">
<link type="text/css" rel="stylesheet" href="css/barraNavegacionVertical.css" />
        <div class="row">        
          <div class="col">
            
          </div>
          <div class="col-5">
          <br>
          <br>
          <br>
            <!--// Creamos un titulo y cuando demos click en el boton nos aparecera un nuevo sitio -->  
                <h3>HOME</h3>                
            <div class="panel-body" >
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <ul class="list-group list-unstyled">
            <!--//con esto le pasamos a el controlador index que nos muestre la vista del home de usuarios -->
            <li><a class="list-group-item active list-group-item-dark list-group-item-action" href="{{action('UserController@index')}}">Administrar Usuarios</a></li>
            <li><a class="list-group-item list-group-item-darklist-group-item-action" href="{{action('AuditorioController@index')}}">Administrar Auditoríos</a></li>
            <li><a class="list-group-item list-group-item-darklist-group-item-action" href="{{action('EventoController@index')}}">Administrar eventos</a></li>
            <li><a class="list-group-item list-group-item-darklist-group-item-action" href="{{action('AcercaDeController@index')}}">Acerca de </a></li>
            </ul>                    
                </div>          
          <div class="col">
            
          </div>
        </div>
      </div>
@endsection
