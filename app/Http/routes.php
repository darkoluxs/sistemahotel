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
Route::get(' ','HomeController@index');
Route::get('serviciocliente/consumo','ClienteController@cliente');
Route::get('serviciocliente/reservas' ,'ClienteController@reservas');
Route::get('empleados/empleados', 'EmpleadosController@empleados');
Route::resource('habitaciones', 'HabitacionesController');
Route::resource('clientes', 'ClientesController');