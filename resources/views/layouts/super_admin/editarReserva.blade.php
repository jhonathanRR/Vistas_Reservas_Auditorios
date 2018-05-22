@extends('layouts.app')

@section('content')

<!-- Equal width cols, same on all screen sizes -->
<div class="container">
        <div class="row">
          <div class="col">
            
          </div>
          <div class="col-8">
          <h1>Editar reserva</h1>
            <p class="lead">Ingrese los datos para modificar la reserva.
            <a href="{{ route('crudReserva.index') }}">Regresar y ver todas las reservas</a></p>
            <hr>
            @if($errors->any())
            <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
            </div>
            @endif
            {!! Form::model($data, [
            'method' => 'PUT',
            'route' => ['crudReserva.update', $data->id]
            ]) !!}            
            <div class="form-group">
            {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
            {!! Form::label('dateInit', 'Fecha inicio', ['class' => 'control-label']) !!}
            {!! Form::date('dateInit', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
            {!! Form::label('dateEnd', 'Fecha fin', ['class' => 'control-label']) !!}
            {!! Form::date('dateEnd', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
            {!! Form::label('observation', 'Observación', ['class' => 'control-label']) !!}
            {!! Form::textArea('observation', null, ['class' => 'form-control']) !!}
            </div>
            {!! Form::submit('Actualizar reserva', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
                
            </div>                    
          <div class="col">
            
          </div>
        </div>
      </div>
@endsection