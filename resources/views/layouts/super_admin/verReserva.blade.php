@extends('layouts.app')
@section('content')
<!-- Equal width cols, same on all screen sizes -->
<div class="container">
        <div class="row">
          <div class="col">
            
          </div>
          <div class="col">     
          <h1>{{ $data->name }}</h1>                 
            <a href="{{ route('crudReserva.index') }}">Regresar y ver todas las reservas</a></p>
            <table class="table table-striped table-hover">
            <tr>
            <td>Fecha Inicio</td>
            <td>{{ $data->dateInit }}</td>
            </tr>
            <tr>
            <td>Fecha Fin</td>
            <td>{{ $data->dateEnd }}</td>
            </tr>
            <tr>
            <td>Id del Evento</td>
            <td>{{ $data->event_id }}</td>
            </tr>
            <tr>
            <td>Creado</td>
            <td>{{ $data->created_at }}</td>
            </tr>
            <tr>
            <td>Actualizado</td>
            <td>{{ $data->updated_at }}</td>
            </tr>
            <tr>
            <td>Observación</td>
            <td>{{ $data->observation }}</td>
            </tr>
            </table>
          </div>
          <div class="col">
            
          </div>
        </div>
      </div>
@endsection