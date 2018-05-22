@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">
          <div class="col">
            
          </div>
          <div class="col-13">
          <h1>Agregar una nueva reserva</h1>
            <p class="lead">Ingrese la siguiente información para crear una nueva reserva.</p>
            <a href="{{ route('crudReserva.index') }}">Regresar y ver todas las reservas</a></p>
            <hr>
            {!! Form::open(['route' => 'crudReserva.store']) !!}
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
            {!! Form::label('event_id', 'Evento', ['class' => 'control-label']) !!}
            {!! Form::select('event_id', array_pluck($list, 'name', 'id'), null, array('class' => 'form-control')) !!}
            </div>
            <div class="form-group">
            {!! Form::label('observation', 'Observación', ['class' => 'control-label']) !!}
            {!! Form::textArea('observation', null, ['class' => 'form-control']) !!}
            </div>
            {!! Form::submit('Crear reserva', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
          </div>          
          <div class="col">
            
          </div>
        </div>
</div>
@endsection