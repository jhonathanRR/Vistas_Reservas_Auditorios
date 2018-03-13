
@extends('layouts.app')


<!--//Jhonathan Rodriguez Ramirez --> 
@if(Session::has('message'))
<div class="alert alert-sucess alert-dismissible" role="alert">
   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
   {{Session::get('message')}}    
</div>
@endif

@section('content')
               <!--// Creamos un usuario y cuando demos click en el boton nos aparecera un nuevo usuario -->  
                   <h3>Listado de  reservas para los auditorios<a href="crearReserva">
                   </br>
                       <br/><button>Nuevo</button></a>
                   </h3>

                   <pre>
        <b>Id               Nombre            latitud              logintud          hora inicio      hora fin                          Editar              Eliminar</b>           
        1              Auditorio F        121.121                  322.232        20-02-2018 20:00     20-02-2018 21:00             <a href="editarReserva"><button type="button" class="btn btn-primary">Editar</button></a>       <button type="button" class="btn btn-danger">Eliminar</button>      
                      
                       </pre>

                           <tbody>
                               
                       </table>                        
                   </div>
       </div>
   </div>
</div>
@endsection