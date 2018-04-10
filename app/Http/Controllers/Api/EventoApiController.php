<?php

namespace App\Http\Controllers\Api;
use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventoApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Me muestra en la webservices
        $events= Event::all()->toarray(); 
        return response()->json($events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Almacenar para utilizar la webservices
        try{
            $event = new Event([
                'name'=>$request->input('name'),
                'organizator'=>$request->input('organizator'),
                'description'=>$request->input('description'),
                'auditorio_id'=>$request->input('auditorio_id'),
            ]);
            $event->save();
            return response()->json(['status'=>true,'muchas gracias'],200);
            
        }catch(\Exception $e){
            return response('NO GUARDO',500);
        }
    }

    /**
     * Me muestra el id que busquemos
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // para mostrar en nuestra api
        try{
            $event= Event::find($id);
            if(!$event){
                return response()->json(['No existe este numero de evento'],404);
            }
            return response()->json($event);

        }catch(\Exception $e){
            return response ('Algo salio mal, contacte el administrador ',500);
        }

    }

    /**
     * Sirve para borrar un api
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $event = Event::find($id);

            if(!$event){
                return response()->json(['este evento que selecciono no existe'],404);                
            }
            $event->delete();
            return response()->json(['Evento borrado',200]);
            
        }catch(\Exception $e){
            return response('Algo salio mal, contacte el administrador',500);
        }
        
    }
}
