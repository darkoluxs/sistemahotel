<?php

//VISTAS INDEX

Route::get('/', function () {
    return view('welcome');
});

//VISTAS ALOJAMIENTOS

Route::get('/alojamientos', function() {
	return view('alojamientos');
});

//VISTAS SERVICIO AL CLIENTE

Route::get('/serviciocliente',function() {
	return view('serviciocliente');
}); 

//VISTAS HABITACIONES

Route::get('/habitaciones', function() { 
	return view('habitaciones');
});

//VISTA SERVICIOS

Route::get('/servicios', function() {
	return view('servicios');
}); 

//VISTAS FACTURAS 

Route::get('/facturas', function() {
	return view('facturas');
}); 

// VISTAS CLIENTES

Route::get('/clientes', function() { 
	return view('clientes');
});

//VISTAS EMPLEADOS

Route::get('/empleados' , function () {
	return view('empleados');
});