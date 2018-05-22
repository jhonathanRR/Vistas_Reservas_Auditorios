
@extends('layouts.app')

<!--// El mensaje viene del controlador siteController del metodo store con el cual vamos a poder decir si un sitio fue creado exitosamente--> 
@if(Session::has('message'))
<div class="alert alert-sucess alert-dismissible" role="alert">
   <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
   {{Session::get('message')}}    
</div>
@endif

@section('content')               
<div class="container">
       <div class="row">
         <div class="col">
           
         </div>
         <div class="col-13">
         <br>
         <br>
         <br>
         <h3>Listado de  Reservas<a href="crearReserva">
         </br>
             <br/><button class="btn btn-outline-dark">Nuevo</button></a>
             <a href="home"><button class="btn btn-outline-dark">Atrás</button></a>
         </h3>
         <table class="table">
           <thead class="thead-dark">
             <tr>
             <th>Nombre</th>
               <th>Fecha Inicio</th>
               <th>Fecha Fin</th>
               <th>Observación</th>
               <th>Editar</th>      
               <th>Ver</th>    
               <th>Eliminar</th>      
             </tr>
           </thead>
           <tbody>
           @foreach($list as $reserva)
             <tr>
             <th scope="row">{{ $reserva->name }}</th>
               <td>{{ $reserva->dateInit }}</td>
              <td>{{ $reserva->dateEnd }}</td> 
               <td>{{ $reserva->observation }}</td>
               <td><a href="{{ route('crudReserva.edit', $reserva->id) }}" class="btn btn-primary">Editar</a></td>      
               <td><a href="{{ route('crudReserva.show', $reserva->id) }}" class="btn btn-outline-primary">Ver</a></td>                      
               <td>
                   <form action="{{ route('crudReserva.destroy', $reserva->id) }}" method="post">
                       {{csrf_field()}}
                       <input type="hidden" name="_method" value="DELETE">
                       <button class="btn btn-outline-danger" type="submit">Eliminar</button>
                   </form>
               </td>
             </tr>              
             @endforeach              
           </tbody>
         </table>
         {{$list->render()}}
         </div>          
         <div class="col">
           
         </div>
       </div>
     </div>      
@endsection