<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



    // Ruta para editar el auditorio Verb=Post
    Route::get('/acercaDe', 'AcercaDeController@index');


Auth::routes();

// Ruta en la cual el usuario super admin puede generar CRUD de users
//la ruta es resource es decir que me sirve para cualquier tipo de verbo 

Route::group(['middleware' => 'auth'], function () {
    // Las rutas que incluyas aquí pasarán por el middleware 'auth'
    //////// RUTAS DEL SUPER ADMIN
    Route::resource('/crudUser', 'SuperAdminController');
    // Ruta la cual la utilizaremos para solicitar el ingreso del super admin Verb=get
    Route::get('/home', 'HomeController@index')->name('home');
    // Ruta para solicitar el formulario de crear del administrador Verb=Post
    Route::get('/crearAdmin', 'SuperAdminController@create');
    // Ruta para solicitar el formulario de crear usuario turnos Verb=Post
    Route::get('/crearUsuarioTurnos', 'SuperAdminController@createUsuarioTurnos');
    // ruta para entrar a la gestion de los usuarios
    Route::get('/gestion_usuarios', 'SuperAdminController@createGestionUsuarios')->name('gestionuser');

    // Ruta para editar el usuario Verb=Post
    Route::get('/editarUsuario', 'SuperAdminController@edit');


    /////RUTAS DEL AUDITORIO
    // crud del auditorio
    Route::resource('/crudAuditorium', 'AuditorioController');
    //crear el auditorio
    Route::get('/crearAuditorio', 'AuditorioController@create');

    // Ruta para editar el auditorio Verb=Post
    Route::get('/editarAuditorio', 'AuditorioController@edit');


    //////RUTAS PARA LAS RESERVAS 
    // crud del auditorio
    Route::resource('/crudReserva', 'ReservaController');
    //crear el auditorio
    Route::get('/crearReserva', 'ReservaController@create');

    // Ruta para editar el auditorio Verb=Post
    Route::get('/editarReserva', 'ReservaController@edit');


});
