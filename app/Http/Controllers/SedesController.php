<?php

namespace App\Http\Controllers;

use App\Models\Sedes;
use Illuminate\Http\Request;

class SedesController extends Controller
{
    public function __construct() {

        $this->middleware('auth');
    }

    public function index()
    {
        return view('modulos.agregar-sedes');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre_sede' => 'required',
            
        ], [
            'nombre_sede.required' => 'El campo Sede es obligatorio.',
            
        ]);
        
        $oficina = new Sedes();
        $oficina->nombre_sede = $request->input('nombre_sede');

        if($oficina->save()){
            return redirect()->route('agregar-sedes.index')->with('message', 'Se registro exitosamente la sede.');
        }else{
            return redirect()->route('agregar-sedes.index')->with('error', 'Ocurrió un error al registrar la sede.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(sedes $sedes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(sedes $sedes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, sedes $sedes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(sedes $sedes)
    {
        //
    }
}
