<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Event;
use App\Auditorio;
use Session;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        //me devuelve todos los 4 primeros usuarios
        $events = Event::paginate(4);
        // retorna el crud del evento
        return view('/layouts.super_admin.crudEvento',['list' => $events]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $auditorios = Auditorio::all();        
        //$events = ['Hola', 'Sapo'];
        return view('layouts.super_admin.crearEvento',['list' => $auditorios]);
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
        Event::create($input);
        //return "Auditorio de la uam registrado";
		return redirect('crudEvento')->with('message','Evento Guardado exitosamente');            
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
            $event = Event::findOrFail($id);
            return view('layouts.super_admin.verEvento', ['data' => $event]);
        }catch(ModelNotFoundException $e){
            Session::flash();
            return redirect('crudEvento')->with('message','El usuario ($id) no puede ser consultado !');                        
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try{
            $event = Event::findOrFail($id);
            return view('layouts.super_admin.editarEvento', ['data' => $event]);
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
            $event = Event::findOrFail($id);
            $input = $request->all();
            $event->fill($input)->save();
            Session::flash('flash_message', 'Evento editado correctamente!');
            return redirect('crudEvento')->with('message','Evento editado correctamente!');            
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
            $event = Event::findOrFail($id);            
            $event->delete();
            Session::flash('flash_message', 'Evento eliminado correctamente!');
            return redirect('crudEvento')->with('message','Evento eliminado correctamente!');            
        }catch(ModelNotFoundException $e){            
            Session::flash('flash_message', 'El evento ($id) no ha podido ser eliminado!');
            return redirect()->back();
        }
    }
    
}
