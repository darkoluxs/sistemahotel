<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('clientes.clientes')->with('clientes');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.clientes');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages=[
            'cli_name.required'=>'El nombre es requerido',
            'cli_apellido.required'=>'El apellido es requerido',
            'cli_email.required'=>'El email es requerido',
            'cli_email.unique'=>'El email ya está en uso',
            'cli_telefono.required'=>'El telefono es requerido',
        ];

        $this->validate($request,[
            'cli_name'=>'required',
            'cli_apellido'=>'required',
            'cli_email'=>'required|unique:clientes',
            'cli_telefono'=>'required',
        ],$messages);


        $cliente=new Cliente;
        $cliente->cli_name=$request->input('cli_name');
        $cliente->cli_apellido=$request->input('cli_apellido');
        $cliente->cli_email=$request->input('cli_email');
        $cliente->cli_telefono=$request->input('cli_telefono');

        return redirect('clientes')->with('success','Cliente Guardado');

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
        $cliente = Cliente::find($id);
        return view('cliente.edit_cliente')->with('cliente', $clientes)
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
        
         $messages=[
            'cli_name.required'=>'El nombre es requerido',
            'cli_apellido.required'=>'El apellido es requerido',
            'cli_email.required'=>'El email es requerido',
            'cli_email.unique'=>'El email ya está en uso',
            'cli_telefono.required'=>'El telefono es requerido',
        ];

        $this->validate($request,[
            'cli_name'=>'required',
            'cli_apellido'=>'required',
            'cli_email'=>'required|unique:clientes',
            'cli_telefono'=>'required',
        ],$messages);


        $cliente=new Cliente::find($id)
        $cliente->cli_name=$request->input('cli_name');
        $cliente->cli_apellido=$request->input('cli_apellido');
        $cliente->cli_email=$request->input('cli_email');
        $cliente->cli_telefono=$request->input('cli_telefono');

        return redirect('clientes')->with('success','Cliente Actualizado');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);

        $cliente->delete();

        return redirect('/empleados')->with('success', 'Empleado borrado');
    }
}