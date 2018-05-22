<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reserva;
use App\Auditorio;
use App\Event;
use Session;
use \Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservas = Reserva::all();
        //me devuelve todos los 4 primeros usuarios
        $reservas = Reserva::paginate(4);
        
        // retorna el crud del evento
        return view('/layouts.super_admin.crudReserva',['list' => $reservas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eventos = Event::all();        
        return view('layouts.super_admin.crearReserva',['list' => $eventos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        var_dump($input);
        Reserva::create($input);
        //return "Auditorio de la uam registrado";
		return redirect('crudReserva')->with('message','Reserva Guardada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //        
        try{
            $reserva = Reserva::findOrFail($id);
            return view('layouts.super_admin.verReserva', ['data' => $reserva]);
        }catch(ModelNotFoundException $e){
            Session::flash();
            return redirect('crudReserva')->with('message','El usuario ($id) no puede ser consultado !');                        
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //falta el $id
    public function edit($id)
    {
        try{
            $reserva = Reserva::findOrFail($id);
            return view('layouts.super_admin.editarReserva', ['data' => $reserva]);
        }catch(ModelNotFoundException $e){
            Session::flash();
            return redirect()->back('flash_message', 'El usuario ($id) no puede ser editado !');
        }        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        try{
            $reserva = Reserva::findOrFail($id);
            $input = $request->all();
            $reserva->fill($input)->save();
            Session::flash('flash_message', 'Reserva editado correctamente!');
            return redirect('crudReserva')->with('message','Reserva editada correctamente!');            
        }catch(ModelNotFoundException $e){            
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //        
        try{
            $reserva = Reserva::findOrFail($id);            
            $reserva->delete();
            Session::flash('flash_message', 'Reserva eliminada correctamente!');
            return redirect('crudReserva')->with('message','Reserva eliminada correctamente!');            
        }catch(ModelNotFoundException $e){            
            Session::flash('flash_message', 'La reserva ($id) no ha podido ser eliminada!');
            return redirect()->back();
        }
    }
}
