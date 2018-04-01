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

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                                <label for="cedula" class="col-md-4 control-label">cedula</label>
    
                                <div class="col-md-6">
                                    <input id="cedula" type="password" class="form-control" name="cedula" required>
                                </div>
                            </div>

                            <div class="form-group">
                                    <label for="rol" class="col-md-4 control-label">rol</label>
        
                                    <div class="col-md-6">
                                            <select>
                                                    <option value="volvo">Usuario de turnos</option>
                                                    <option value="saab">Usuario Admin</option>
                                                  </select>
                                    </div>
                                </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
