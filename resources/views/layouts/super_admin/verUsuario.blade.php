@extends('layouts.app')
@section('content')
<!-- Equal width cols, same on all screen sizes -->
<div class="container">
        <div class="row">
          <div class="col">
            
          </div>
          <div class="col">
          <h1 style="background-color: aquamarine">{{ $data->name }}</h1>
           <p class="lead">{{ $data->password }}</p>
            <a href="{{ route('crudUser.index') }}">Regresar y ver todos los usuarios</a></p>
            <table class="table table-striped table-hover">
            <tr>
                <td style="width: 200px;">Id</td>
                <td>{{ $data->id }}</td>
            </tr>    
            <tr>
               <td style="width: 200px;">Apellido(s)</td>
               <td>{{ $data->lastname }}</td>
            </tr>
            <tr>
            <td style="width: 200px;">Correo</td>
            <td>{{ $data->email }}</td>
            </tr>
            <tr>
            <td>Rol</td>
            <td>{{ $data->rol }}</td>
            </tr>
            <tr>            
            <td>Creado</td>
            <td>{{ $data->created_at }}</td>
            </tr>
            <tr>
            <td>Actualizado</td>
            <td>{{ $data->updated_at }}</td>
            </tr>
            </table>
          </div>
          <div class="col">
            
          </div>
        </div>
      </div>
@endsection