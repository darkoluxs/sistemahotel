<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::resource(' ','HomeController@index');
Route::get('inicio', 'HomeController@index');
//Route::resource('serviciocliente/consumo','ClienteController@cliente');
Route::resource('reservas' ,'ReservasController');
Route::resource('empleados', 'EmpleadosController');
Route::resource('habitaciones', 'HabitacionesController');
Route::resource('facturas', 'FacturasController');
Route::resource('servicios', 'ServiciosController');
Route::resource('clientes', 'ClientesController');