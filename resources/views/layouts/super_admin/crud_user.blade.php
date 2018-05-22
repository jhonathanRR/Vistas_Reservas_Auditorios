
@extends('layouts.app')


 <!--//Jhonathan Rodriguez Ramirez --> 
@if(Session::has('message'))
<div class="alert alert-sucess alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {{Session::get('message')}}    
</div>
@endif

@section('content')
<div class="container">
        <div class="row">
          <div class="col">
            
          </div>
          <div class="col-14">
          <br>
          <br>
          <br>
          <!--// Creamos un titulo y cuando demos click en el boton nos aparecera un nuevo sitio -->  
            <h3>Listado de Los usuarios<a href="crear"></h3>
                <br/><button class="btn btn-outline-dark">Nuevo</button></a>
                <a href="home"><button class="btn btn-outline-dark">Atrás</button></a>                

                    <table class="table">
                        <thead class="thead-dark">
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>                                
                            <th>Fecha de Creación</th>
                            <th>Rol</th>
                            <th>Editar</th>      
                            <th>Ver</th>    
                            <th>Eliminar</th>    
                        </thead>
                        <!--// mostrar el total de registros que tengo en mi tabla sitios -->
                        @foreach($users as $user)
                        <tbody>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->lastname}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->rol}}</td>
                            <td><a href="{{ route('crudUser.edit', $user->id) }}" class="btn btn-primary">Editar</a></td>      
                            <td><a href="{{ route('crudUser.show', $user->id) }}" class="btn btn-outline-primary">Ver</a></td>                      
                            <td>
                                <form action="{{ route('eliminar2', $user->id) }}" method="post">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-outline-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tbody>
                        @endforeach
                    </table>                                            
                    {{$users->render()}}
                </div>          
          <div class="col">
            
          </div>
        </div>
      </div>                
@endsection
