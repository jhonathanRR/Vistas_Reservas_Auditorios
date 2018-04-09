<?php

namespace App\Http\Controllers;
use \App\User;
use Session;
use Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        
        // me valida si soy un usuario administrador

        if(Auth::user()->isAdmin()==true){
            $users = User::all();
        //me devuelve todos los 4 primeros usuarios
        $users=User::paginate(4);
        //para enviarle la informacion a la tabla 
        return view('layouts.super_admin.crud_user',compact('users'));		            
        }else{
            return view('mensajeDeError');

        }
    }

    /**
     * ME PERMITE CREAR UN USUARIO CIERRA LA SESSION DEL AUTH Y VA A LA RUTA ESPECIFICA
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // me permite crear un usuario
        Auth::logout();
        return redirect('/register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
            $event = User::findOrFail($id);
            return view('layouts.super_admin.verUsuario', ['data' => $event]);
        }catch(ModelNotFoundException $e){
            Session::flash();
            return redirect('crudUser')->with('message','El usuario ($id) no puede ser consultado !');                        
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
        // 
        $user = User::find($id);
        return view('layouts.super_admin.editarUsuario',['data'=>$user]);
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
        try{
            $user = User::findOrFail($id);
            $input = $request->all();
            $user->fill($input)->save();
            Session::flash('message','Usuario editado Correctamente');
            return redirect('crudUser')->with('message','Usuario editado correctamente!');            
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
        if(Auth::user()->isAdmin()==true){
            User::destroy($id);
            Session::flash('message','Usuario eliminado de manera correcta');
            return Redirect::to('crudUser');
    
        }else{
            return view('mensajeDeError');

        }

    }
}
