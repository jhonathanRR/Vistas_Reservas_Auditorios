
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
                    <h3>Listado de los usuarios creados<a href="gestion_usuarios">
                        <br/><button>Nuevo</button></a>
                    </h3>

                    <pre>
            <b>Id               Nombre            Email              rol          fecha creacion      fecha modificacion       Editar          Eliminar</b>           
            1              Jhonathan       jnatan162@gmail.com   user_admin     20-02-2018            25-02-2018         <a href="editarUsuario"><button type="button" class="btn btn-primary">Editar</button></a>       <button type="button" class="btn btn-danger">Eliminar</button>      
                       
                        </pre>

                            <tbody>
                                
                        </table>                        
                    </div>
        </div>
    </div>
</div>
@endsection