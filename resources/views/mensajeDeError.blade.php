@extends('layouts.app')
@section('content')

<div class="center-block">
<div class="col-xs-4">
<div class="alert alert-danger" role="alert" >
    <div class="text-center">
    <strong>NO TIENES PERMISOS PARA INGRESAR A ESTA PAGINA 
        CONTACTE SU ADMINISTRADOR
    </strong>
    </div>
  </div>       
</div>
</div>

  </div>
  <div class="container">
        <div class="row">
          <div class="col-5">
            
          </div>
          <div class="col">
          <a href="{{route('home')}}"><button class="btn btn-dark">Regresar</button></a>
          </div>
          <div class="col">
            
          </div>
        </div>
    </div> 
@endsection