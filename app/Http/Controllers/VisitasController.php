<?php

namespace App\Http\Controllers;

use App\Models\visitas;
use App\Models\Oficinas;
use App\Models\Sedes;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp;
use Illuminate\Support\Facades\Auth;

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
        
        date_default_timezone_set("America/Lima");
        
        $oficinas = Oficinas::all();
        $sedes = Sedes::all();

        return view('modulos.registrar-visita', ['oficinas' => $oficinas, 'sedes'=> $sedes]);
    }

    public function reporte()
    {
        $oficinas = Oficinas::all();
        $sedes = Sedes::all();

        $user = Auth::user();

        if($user->roles->first()->name == 'admin'){
            $reportes = Visitas::where('estado', '1')->get();
          
            return view('modulos.reporte-visitas', ['reportes' => $reportes]);
        }else{
            $reportes = User::find($user->id);

            $reportes = $reportes->visitas;

            return view('modulos.reporte-visitas', ['reportes' => $reportes]);
        }


        // dd($rolesUser);

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
        date_default_timezone_set("America/Lima");
        
        // dd($request);
        $validatedData = $request->validate([
            'dni' => 'required|digits:8',
            'nombres' => 'required',
            'apellidos' => 'required',
            'fecha_y_hora' => 'required',
            'oficina' => 'required',
            'personero_id' => 'required'
        ], [
            'dni.required' => 'El campo DNI es obligatorio.',
            'dni.digits' => 'El campo DNI debe contener 8 números.',
            'nombres.required' => 'El campo Nombres es obligatorio.',
            'apellidos.required' => 'El campo Apellidos es obligatorio.',
            'fecha_y_hora.required' => 'El campo Fecha y Hora es obligatorio.',
            'oficina.required' => 'El campo Oficina es obligatorio.',
            'personero_id.required' => 'El campo Personero es obligatorio.'
        ]);


        $visita = new Visitas();
        $visita->dni = $request->input('dni');
        $visita->nombres = $request->input('nombres');
        $visita->apellidos = $request->input('apellidos');
        $visita->fecha_y_hora = date('Y-m-d\TH:i:s');

        $nombreOficina = Oficinas::where('nombre_oficina', $request->input('oficina'))->first();
        $visita->oficina_id = $nombreOficina->id;
        
        $visita->personero_id = $request->input('personero_id');
        $visita->estado = '2';

        if($visita->save()){
            return redirect()->route('registrar-visita.index')->with('message', 'Se registro exitosamente la visita.');
        }else{
            return redirect()->route('registrar-visita.index')->with('error', 'Ocurrió un error al registrar la visita.');
        }
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

