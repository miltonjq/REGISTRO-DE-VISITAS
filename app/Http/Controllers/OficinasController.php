<?php

namespace App\Http\Controllers;

use App\Models\Oficinas;
use Illuminate\Http\Request;

class OficinasController extends Controller
{
    public function __construct() {

        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('modulos.agregar-oficina');
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
        // dd($request);
        $validatedData = $request->validate([
            'nombre_oficina' => 'required',
            
        ], [
            'nombre_oficina.required' => 'El campo Oficina es obligatorio.',
            
        ]);
        
        $oficina = new Oficinas();
        $oficina->nombre_oficina = $request->input('nombre_oficina');

        if($oficina->save()){
            return redirect()->route('agregar-oficina.index')->with('message', 'Se registro exitosamente la oficina.');
        }else{
            return redirect()->route('agregar-oficina.index')->with('error', 'Ocurrió un error al registrar la oficina.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(oficinas $oficinas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(oficinas $oficinas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, oficinas $oficinas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(oficinas $oficinas)
    {
        //
    }
}
