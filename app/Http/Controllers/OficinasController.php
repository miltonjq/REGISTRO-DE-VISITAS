<?php

namespace App\Http\Controllers;

use App\Models\Oficinas;
use App\Models\Sedes;
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
        $oficinas = Oficinas::all();
        $sedes = Sedes::all();
        // dd($oficinas);
        return view('modulos.agregar-oficina', ['oficinas' => $oficinas, 'sedes' => $sedes]);
        
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
            'piso' => 'required',
            'sede_id' => 'required',
            
        ], [
            'nombre_oficina.required' => 'El campo Oficina es obligatorio.',
            'piso.required' => 'El campo Piso es obligatorio.',
            'sede_id.required' => 'El campo Sede es obligatorio.',
            
        ]);
        
        $oficina = new Oficinas();
        $oficina->nombre_oficina = $request->input('nombre_oficina');
        $oficina->piso = $request->input('piso');
        $oficina->sede_id = $request->input('sede_id');

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
    public function destroy($id)
    {

        $oficina = Oficinas::findOrFail($id);
        $oficina->delete();

        if($oficina){
            return redirect()->route('agregar-oficina.index')->with('message', 'Se elimino correctamente la oficina.');
        }else{
            return redirect()->route('agregar-oficina.index')->with('error', 'Ocurrió un error al eliminar la oficina.');
        }
    }
}
