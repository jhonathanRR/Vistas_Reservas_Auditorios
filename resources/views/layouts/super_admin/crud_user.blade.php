@extends('layouts.app')


 <!--// El mensaje viene del controlador siteController del metodo store con el cual vamos a poder decir si un sitio fue creado exitosamente--> 
@if(Session::has('message'))
<div class="alert alert-sucess alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    {{Session::get('message')}}    
</div>
@endif

@section('content')
                <!--// Creamos un titulo y cuando demos click en el boton nos aparecera un nuevo sitio -->  
                    <h3>Listado de Los usuarios<a href="crear">
                        <br/><button>Nuevo</button></a>
                    </h3>

                        <table class="table">
                            <thead>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Email</th>
                                <th>Rol</th>
                                <th>Opciones</th>
                            </thead>
                            <!--// mostrar el total de registros que tengo en mi tabla sitios -->
                            @foreach($users as $user)
                            <tbody>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->lastname}}</td>
                                <td>{{$user->email}}</td>
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
                    </div>
        </div>
    </div>
</div>
{{$users->render()}}
@endsection
