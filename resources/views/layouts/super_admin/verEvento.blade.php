@extends('layouts.app')
@section('content')
<!-- Equal width cols, same on all screen sizes -->
<div class="container">
        <div class="row">
          <div class="col">
            
          </div>
          <div class="col">
          <h1>{{ $data->name }}</h1>
            <p class="lead">{{ $data->organizator }}</p>
            <a href="{{ route('crudEvento.index') }}">Regresar y ver todos los eventos</a></p>
            <table class="table table-striped table-hover">
            <tr>
            <td style="width: 200px;">Organizador</td>
            <td>{{ $data->organizator }}</td>
            </tr>
            <tr>
            <td>Fecha Inicio</td>
            <td>{{ $data->dateInit }}</td>
            </tr>
            <tr>
            <td>Fecha Fin</td>
            <td>{{ $data->dateEnd }}</td>
            </tr>
            <tr>
            <td>Id del Auditorio</td>
            <td>{{ $data->auditorio_id }}</td>
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