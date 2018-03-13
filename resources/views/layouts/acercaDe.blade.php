@extends('layouts.app')

@section('content')
<div class="container">
        <link type="text/css" rel="stylesheet" href="css/barraNavegacionVertical.css" />
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div style="color:steelblue"class="panel-heading"><b>Reserva De Auditorios</b></div>

                <div class="panel-body" >
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                   <pre>
                                     Version 1.0

                        Desarrollador Por: Jhonathan Rodriguez Ramirez.
                                           Alexander Peña     

                       Asesor de proyecto: Jorge Ivan Meza Martinez                  



                                2018/01/10 - 2018/05/2018
                Todos los derechos reservados. Contrato de licencia.    
                              

                                 
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection