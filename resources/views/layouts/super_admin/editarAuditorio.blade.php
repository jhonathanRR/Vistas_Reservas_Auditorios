@extends('layouts.app');
@section('content');

<!-- Equal width cols, same on all screen sizes -->
<div class="container">
        <div class="row">
          <div class="col">
            
          </div>
          <div class="col-8">
          <h1>Editar auditorio</h1>
            <p class="lead">Ingrese los datos para modificar el auditorio.
            <a href="{{ route('crudAuditorio.index') }}">Regresar y ver todos los auditorios</a></p>
            <hr>
            @if($errors->any())
            <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
            </div>
            @endif
            <!--// Lo que vamos hacer es enrutar para que guarde un sitio esto lo hacemos pasandolo po -->
			{!!Form::model($auditorio,['route'=>['auditorios.update',$auditorio->id],'method'=>'PUT'])!!}
			<div class="form-group">
				{!!Form::label('Nombre:')!!}
				{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del auditorio'])!!}
			</div>

			<div class="form-group">
				{!!Form::label('Latitud:')!!}
				{!!Form::text('latitude',null,['class'=>'form-control','placeholder'=>'Ingrese la latitud del auditorio'])!!}
			</div>

			<div class="form-group">
				{!!Form::label('Longitud:')!!}
				{!!Form::text('longitude',null,['class'=>'form-control','placeholder'=>'Ingrese la longitud del auditorio'])!!}
			</div>

			<div class="form-group">
				{!!Form::label('Descripcion:')!!}
				{!!Form::textArea('description',null,['class'=>'form-control','placeholder'=>'Ingrese la descripcion del auditorio'])!!}
			</div>
			{!!Form::submit('Editar',['class'=>'btn btn-primary'])!!},

			{!!Form::close()!!}	
                
            </div>                    
          <div class="col">
            
          </div>
        </div>
      </div>	
@stop