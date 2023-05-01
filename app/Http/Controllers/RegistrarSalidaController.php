<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Visitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrarSalidaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = Auth::user();

        if($user->roles->first()->name == 'admin' or $user->roles->first()->name == 'supervisor'){
            $reportes = Visitas::where('estado', '2')->get();
          
            return view('modulos.registrar-salida', ['reportes' => $reportes]);
        }else{
            $reportes = User::find($user->id);

            $reportes = $reportes->visitas->where('estado', '2');

            return view('modulos.registrar-salida', ['reportes' => $reportes]);
        }
        
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
        date_default_timezone_set("America/Lima");

        $visita = Visitas::where('dni',$request->input('dni'))->where('estado', '2')->latest()->first();
        // dd($visita);
        
        if($visita != null){
            $visita->estado = '1';
            $visita->fecha_y_hora_salida = date('Y-m-d\TH:i:s');
        }else{
            return redirect()->route('registrar-salida.index')->with('error', 'El usuario con DNI: '.$request->input('dni').' no tiene una visita pendiente.');
        }
        
        if($visita->save()){
            return redirect()->route('registrar-salida.index')->with('message', 'Se registro exitosamente la salida.');
        }else{
            return redirect()->route('registrar-salida.index')->with('error', 'Ocurrió un error al registrar la salida.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        date_default_timezone_set("America/Lima");
        
        $visita = Visitas::find($id);

        $visita->estado = '1';
        $visita->fecha_y_hora_salida = date('Y-m-d\TH:i:s');

        if($visita->save()){
            return redirect()->route('registrar-salida.index')->with('message', 'Se registro exitosamente la salida.');
        }else{
            return redirect()->route('registrar-salida.index')->with('error', 'Ocurrió un error al registrar la salida.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request);
        $validatedData = $request->validate([
            'observaciones' => 'nullable|string',
        ]);

        $visita = Visitas::findOrFail($id);
        $visita->observaciones = $request->input('observaciones');
        
        if($visita->save()){
            return redirect()->route('registrar-salida.index')->with('message', 'Se agrego correctamente la observacion para el usuario con DNI: '.$visita->dni);
        }else{
            return redirect()->route('registrar-salida.index')->with('error', 'Ocurrión un error al agregar la observacion para el usuario con DNI: '.$visita->dni);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $visita = Visitas::findOrFail($id);
        
        if($visita->delete()){
            return redirect()->route('registrar-salida.index')->with('message', 'Se elimino correctamente el registro.');
        }else{
            return redirect()->route('registrar-salida.index')->with('error', 'Ocurrió un error al eliminar el registro.');
        }
    }
}

