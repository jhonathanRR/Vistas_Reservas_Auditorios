@extends('layouts.app');
@section('content');

	<!-- Equal width cols, same on all screen sizes -->
<div class="container">
        <div class="row">
          <div class="col">
            
          </div>
          <div class="col">
          <h1>Editar usuario</h1>
            <p class="lead">Ingrese los datos para modificar el usuario.
            <a href="{{ route('crudUser.index') }}">Regresar y ver todos los usuarios</a></p>
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
            'route' => ['crudUser.update', $data->id]
            ]) !!}
            <div class="form-group">
            {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
            {!! Form::label('lastname', 'Apellidos', ['class' => 'control-label']) !!}
            {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
            {!! Form::label('email', 'Correo', ['class' => 'control-label']) !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
            {!! Form::label('rol', 'Rol', ['class' => 'control-label']) !!}
            {!! Form::select('rol', array('admin' => 'Admin','turn' => 'Turnos'),null, ['class' => 'form-control']) !!}
            </div>
            {!! Form::submit('Actualizar usuario', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
                
            </div>                    
          <div class="col">
            
          </div>
        </div>
      </div>


@endsection
