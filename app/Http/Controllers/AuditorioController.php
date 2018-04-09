<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Auditorio;
use Auth;
use Session;
class AuditorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auditorios = Auditorio::all();
        //me devuelve todos los 4 primeros usuarios
        $auditorios=Auditorio::paginate(4);

        
        // retorna el crud del auditorio
        return view('/layouts.super_admin.crudAuditorio',compact('auditorios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('/layouts.super_admin.crearAuditorio');
    }

    /**
     * //request es la informacion que nos es lanzada, parte importante para almacenar en nuestra aplicacion.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $auditorio = new Auditorio($request->all());
		$auditorio->user_id = Auth::user()->id;
		$auditorio->save();

        
		//return "Auditorio de la uam registrado";
		return redirect('auditorios')->with('message','Auditorio Guardado exitosamente');

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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // le falta el $id
    public function edit($id)
    {
        //
        $auditorio = Auditorio::find($id);
		return view('layouts.super_admin.editarAuditorio',['auditorio'=>$auditorio]);

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
        $auditorio = Auditorio::find($id);
		$auditorio->fill($request->all());
		$auditorio->save();

		Session::flash('message','Auditorio editado Correctamente');
		return Redirect::to('auditorios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Auditorio::destroy($id);
		Session::flash('message','Auditorio eliminado de manera correcta');
		return Redirect::to('auditorios');
    }
}
