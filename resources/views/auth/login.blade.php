@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
          <div class="col">
            
          </div>
          <div class="col-5">    
          </br>
          </br>
          </br>
          <div class="card">
            <h3 class="card-header">Ingresar</h3>
            <div class="card-body">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email">Correo Electronico</label>

                                <div>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password">Contraseña</label>

                                <div>
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordar datos
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div>
                                    <button type="submit" class="btn btn-primary">
                                        Ingresar
                                    </button>

                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        ¿Olvidó la contraseña?
                                    </a>
                                </div>
                            </div>
                        </form>
            </div>
          </div>                                                                                                
          </div>          
          <div class="col">
            
          </div>
        </div>
</div>
@endsection
