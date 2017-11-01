<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes=Cliente::all();
        return view('clientes.list_clientes')->with('clientes', $clientes);
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
            'cli_name.required'=>'El campo nombre es necesario',
            'cli_apellido.required'=>'El campo apellido es necesario',
            'cli_email.required'=>'El campo e-mail es necesario',
            'cli_email.unique'=>'El cuil ya está en uso',
            'cli_telefono.required'=>'El telefono es necesario',
        ];

        $this->validate($request,[
            'cli_name'=>'required',
            'cli_apellido'=>'required',
            'cli_email'=>'required|unique:clientes',
            'cli_telefono'=>'required',
        ],$messages);

        $cliente= new Cliente;
        $cliente->cli_name = $request->input('cli_name');
        $cliente->cli_apellido = $request->input('cli_apellido');
        $cliente->cli_email = $request->input('cli_email');
        $cliente->cli_telefono = $request->input('cli_telefono');
        $cliente->save();

        return redirect('clientes')->with('success', 'Cliente guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clientes=Cliente::all();
        return view('clientes.clientes')->with('clientes', $clientes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes = Cliente::find($id);
        return view('clientes.edit_clientes')->with('cliente', $clientes);
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
            'cli_name.required'=>'El campo nombre es necesario',
            'cli_apellido.required'=>'El campo apellido es necesario',
            'cli_email.required'=>'El campo e-mail es necesario',
            'cli_email.unique'=>'El cuil ya está en uso',
            'cli_telefono.required'=>'El telefono es necesario',
        ];

        $this->validate($request,[
            'cli_name'=>'required',
            'cli_apellido'=>'required',
            'cli_email'=>'required|unique:clientes,cli_email,'.$id.',cli_id',
            'cli_telefono'=>'required',
        ],$messages);

        $cliente= Cliente::find($id);
        $cliente->cli_name = $request->input('cli_name');
        $cliente->cli_apellido = $request->input('cli_apellido');
        $cliente->cli_email = $request->input('cli_email');
        $cliente->cli_telefono = $request->input('cli_telefono');
        $cliente->save();

        return redirect('clientes')->with('success', 'Cliente actualizado');
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
        return redirect('/clientes')->with('success', 'Cliente eliminado');
    }
}
