@extends('layouts.app');
@section('content');

	<!--// Lo que vamos hacer es enrutar para que guarde un sitio esto lo hacemos pasandolo po -->
	{!!Form::model($user,['route'=>['crudUser.update',$user->id],'method'=>'PUT'])!!}
	<div class="form-group">
		{!!Form::label('Nombre:')!!}
		{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Edite el nombre del usuario'])!!}
	</div>

	<div class="form-group">
		{!!Form::label('lastname:')!!}
		{!!Form::text('lastname',null,['class'=>'form-control','placeholder'=>'Edite el apellido del usuario'])!!}
	</div>

	<div class="form-group">
		{!!Form::label('Email')!!}
		{!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Edite el email del usuario'])!!}
	</div>

	<div class="form-group">
		{!!Form::label('Rol')!!}
		{!!Form::text('rol',null,['class'=>'form-control','placeholder'=>'Edite el rol del usuario'])!!}
	</div>
    
<div>
	{!!Form::submit('Editar',['class'=>'btn btn-primary'])!!},

	{!!Form::close()!!}	
</div>

@stop

