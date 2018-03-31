@extends('layouts.app');
@section('content');

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
	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!},

	{!!Form::close()!!}	

@stop
