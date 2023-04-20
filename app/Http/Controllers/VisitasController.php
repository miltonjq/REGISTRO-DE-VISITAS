<?php

namespace App\Http\Controllers;

use App\Models\visitas;
use Illuminate\Http\Request;

class VisitasController extends Controller
{
    public function __construct() {

        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('modulos.registrar-visita');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        
        $visita = new Visitas();
        $visita->dni = $request->input('dni');
        $visita->nombres = $request->input('nombres');
        $visita->apellidos = $request->input('apellidos');
        $visita->fecha_y_hora = $request->input('fecha_y_hora');
        $visita->sede = $request->input('sede');
        $visita->oficina = $request->input('oficina');
        $visita->personero_id = $request->input('personero_id');
        $visita->save();

        return redirect()->route('registrar-visita.index')->with('message', 'Se registro exitosamente la visita.');

    }

    /**
     * Display the specified resource.
     */
    public function show(visitas $visitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(visitas $visitas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, visitas $visitas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(visitas $visitas)
    {
        //
    }
}

