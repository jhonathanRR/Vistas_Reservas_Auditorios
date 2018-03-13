
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
                   <h3>Listado de  Auditorios<a href="crearAuditorio">
                   </br>
                       <br/><button>Nuevo</button></a>
                   </h3>

                   <pre>
        <b>Id               Nombre            latitud              logintud          fecha creacion      fecha modificacion       Editar             Eliminar</b>           
        1              Auditorio F        121.121               322.232             20-02-2018        25-02-2018             <a href="editarAuditorio"><button type="button" class="btn btn-primary">Editar</button></a>         <button type="button" class="btn btn-danger">Eliminar</button>      
                      
                       </pre>

                           <tbody>
                               
                       </table>                        
                   </div>
       </div>
   </div>
</div>
@endsection