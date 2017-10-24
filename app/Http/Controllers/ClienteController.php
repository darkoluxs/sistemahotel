<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use View;

class ClienteController extends Controller
{
    public function cliente(){
    	return View::make('serviciocliente.consumo');
    }
    public function reservas(){
    	return View::make('serviciocliente.reservas');
    }
}
