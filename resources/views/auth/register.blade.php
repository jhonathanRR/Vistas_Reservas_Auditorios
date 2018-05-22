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
            <h3 class="card-header">Registro</h3>
            <div class="card-body">
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name">Name</label>

                            <div>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-MODIFICANDO ->
                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="lastname">Lastname</label>

                            <div >
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">E-Mail Address</label>

                            <div>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Password</label>

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
                            <label for="password-confirm">Confirm Password</label>

                            <div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        
                        <!- MODIFICANDO LA VISTA PARA ESCOGER EL ROL->

                        <div class="form-group">
                            <label for="rol" class="col-md-4 control-label">Rol</label>

                            <div>
                                <select name="rol">
                                    <option value="turn">Turn</option>
                                    <option value="admin">Admin</option>
                                </select>
                            </div>
                        </div>


                        <!- FIN DE MODIFICANDO LA VISTA PARA ESCOGER EL ROL->

                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-primary">
                                    Register User
                                </button>
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
