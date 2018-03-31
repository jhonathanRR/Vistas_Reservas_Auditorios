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
                    <h3>Listado de los Auditorios de la UAM<a href="{{route('auditorios.create')}}">
                        <br/><button>Nuevo</button></a>
                    </h3>

                        <table class="table">
                            <thead>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Latitud</th>
                                <th>Longitud</th>
                                <th>Descripcion</th>
                                <th>Id del usuario</th>
                                <th>Fecha de Creacion</th>
                                <th>Opciones</th>
                            </thead>
                            <!--// mostrar el total de registros que tengo en mi tabla sitios -->
                            @foreach($auditorios as $auditorio)
                            <tbody>
                                <td>{{$auditorio->id}}</td>
                                <td>{{$auditorio->name}}</td>
                                <td>{{$auditorio->latitude}}</td>
                                <td>{{$auditorio->longitude}}</td>
                                <td>{{$auditorio->description}}</td>
                                <td>{{$auditorio->user_id}}</td>
                                <td>{{$auditorio->created_at}}</td>
                                <td>{!!link_to_route('auditorios.edit', $title = 'Editar', $parameters = $auditorio->id, $attributes = ['class'=>'btn btn-primary'])!!}
                                </td>
                                <td>{!!link_to_route('eliminar', $title = 'Eliminar', $parameters = $auditorio->id, $attributes = ['class'=>'btn btn-danger'])!!}</td>                       
                            </tbody>
                            @endforeach
                        </table>                        
                    </div>
        </div>
    </div>
</div>
{{$auditorios->render()}}
@endsection