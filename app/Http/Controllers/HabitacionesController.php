<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Habitacion;

class HabitacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('habitaciones.habitaciones')->with('habitaciones');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('habitaciones.habitaciones');
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
            'hab_tip.required'=>'El campo tipo de habitación es necesario',
            'hab_num.required'=>'El numero de habitación es necesario',
            'hab_num.unique'=>'El número de habitación ya está en uso',
            'hab_cp.required'=>'El campo habcp es necesario',
         ];   

        $this->validate($request,[
            'hab_tip'=>'required',
            'hab_num'=>'required|unique:habitaciones',
            'hab_cp'=>'required',
        ],$messages);

        $habitacion= new Habitacion;
        $habitacion->hab_tip = $request->input('hab_tip');
        $habitacion->hab_num = $request->input('hab_num');
        $habitacion->hab_cp = $request->input('hab_cp');
        $habitacion->save();

        return redirect('habitaciones')->with('success', 'Habitación registrada')
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $habitaciones=Habitacion::all();
        return view('habitaciones.habitaciones')->with('habitaciones', $habitaciones);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $habitaciones = Habitacion::find($id);
        return view('habitaciones.edit_hab')->with('habitacion', $habitaciones);
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
            'hab_tip.required'=>'El campo tipo de habitación es necesario',
            'hab_num.required'=>'El numero de habitación es necesario',
            'hab_num.unique'=>'El número de habitación ya está en uso',
            'hab_cp.required'=>'El campo habcp es necesario',
         ];   

        $this->validate($request,[
            'hab_tip'=>'required',
            'hab_num'=>'required|unique:habitaciones,hab_num,',.$id.',hab_id',
            'hab_cp'=>'required',
        ],$messages);

        $habitacion= Habitacion::find($id);
        $habitacion->hab_tip = $request->input('hab_tip');
        $habitacion->hab_num = $request->input('hab_num');
        $habitacion->hab_cp = $request->input('hab_cp');
        $habitacion->save();

        return redirect('habitaciones')->with('success', 'Habitación actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $habitacion = Habitacion::find($id);
        $habitacion->delete();
        return redirect('/habitaciones')->with('success', 'Habitación eliminada');
    }
}
