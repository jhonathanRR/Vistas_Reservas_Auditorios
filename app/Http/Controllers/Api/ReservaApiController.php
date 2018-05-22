<?php

namespace App\Http\Controllers\Api;
use App\Reserva;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReservaApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Me muestra en la webservices
        $reservas= Reserva::all()->toarray(); 
        return response()->json(['reservas'=>$reservas]);        
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
            $reserva = new Reserva([
                'name'=>$request->input('name'),
                'observation'=>$request->input('observation'),
                'event_id'=>$request->input('event_id'),
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
            $reserva= Reserva::find($id);
            if(!$reserva){
                return response()->json(['No existe este numero de reserva'],404);
            }
            return response()->json($reserva);

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
            $reserva = Reserva::find($id);

            if(!$reserva){
                return response()->json(['la reserva que selecciono no existe'],404);                
            }   
            $reserva->delete();
            return response()->json(['reserva borrada',200]);
            
        }catch(\Exception $e){
            return response('Algo salio mal, contacte el administrador',500);
        }
        
    }
}
