@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">
          <div class="col">
            
          </div>
          <div class="col-13">
          <h1>Agregar un nuevo evento</h1>
            <p class="lead">Ingrese la siguiente información para crear un nuevo evento.</p>
            <a href="{{ route('crudEvento.index') }}">Regresar y ver todos los eventos</a></p>
            <hr>
            {!! Form::open(['route' => 'crudEvento.store']) !!}
            <div class="form-group">
            {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
            {!! Form::label('organizator', 'Organizador', ['class' => 'control-label']) !!}
            {!! Form::text('organizator', null, ['class' => 'form-control']) !!}
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
            {!! Form::label('auditorio_id', 'Auditorio', ['class' => 'control-label']) !!}
            {!! Form::select('auditorio_id', array_pluck($list, 'name', 'id'), null, array('class' => 'form-control')) !!}
            </div>
            <div class="form-group">
            {!! Form::label('description', 'Descripción', ['class' => 'control-label']) !!}
            {!! Form::textArea('description', null, ['class' => 'form-control']) !!}
            </div>
            {!! Form::submit('Crear evento', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
          </div>          
          <div class="col">
            
          </div>
        </div>
</div>
@endsection