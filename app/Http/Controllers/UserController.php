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
        $users = User::all();
        //me devuelve todos los 4 primeros usuarios
        $users=User::paginate(4);
        //para enviarle la informacion a la tabla 
        return view('layouts.super_admin.crud_user',compact('users'));		
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
        return view('layouts.super_admin.editarUsuario',['user'=>$user]);
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
        User::destroy($id);
		Session::flash('message','Sitio eliminado de manera correcta');
		return Redirect::to('home');

    }
}
