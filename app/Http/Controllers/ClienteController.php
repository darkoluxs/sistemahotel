<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use View;

class ClienteController extends Controller
{
    public function index(){
    	return View::make('serviciocliente.consumo');
    }
}
