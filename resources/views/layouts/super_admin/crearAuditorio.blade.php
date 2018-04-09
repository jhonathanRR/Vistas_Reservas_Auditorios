@extends('layouts.app');
@section('content');
	
	@if(count($errors) >0)
	{
		<div class="alert alert-danger" role="alert">
			<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
			</ul>
		</div>
	}
	@endif	

    <div class="container">
    <div class="row">
        <div class="col">
        
        </div>
        <div class="col-13">
        <h1>Agregar un nuevo auditorio</h1>
        <p class="lead">Ingrese la siguiente información para crear un nuevo auditorio.</p>
        <a href="{{ route('crudAuditorio.index') }}">Regresar y ver todos los auditorios</a></p>
        <hr>
        <!--// Lo que vamos hacer es enrutar para que guarde un auditorio esto lo hacemos pasandolo po -->
        {!!Form::open(['route'=>'auditorios.store','method'=>'POST'])!!}
        <div class="form-group">
            {!!Form::label('Nombre:')!!}
            {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingrese el nombre del sitio'])!!}
        </div>

        <div class="form-group">
            {!!Form::label('Latitud:')!!}
            {!!Form::text('latitude',null,['class'=>'form-control','placeholder'=>'Ingrese la latitud del sitio'])!!}
        </div>

        <div class="form-group">
            {!!Form::label('Longitud:')!!}
            {!!Form::text('longitude',null,['class'=>'form-control','placeholder'=>'Ingrese la longitud del sitio'])!!}
        </div>

        <div class="form-group">
            {!!Form::label('Descripcion:')!!}
            {!!Form::textArea('description',null,['class'=>'form-control','placeholder'=>'Ingrese la descripcion del sitio'])!!}
        </div>
        {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}

        {!!Form::close()!!}	
        </div>          
        <div class="col">
        
        </div>
    </div>
</div>

@stop