<?php

namespace App\Http\Controllers;

use App\Models\Visitas;
use App\Models\Oficinas;
use App\Models\Sedes;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;

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
        date_default_timezone_set("America/Lima");

        $user = Auth::user();

        if($user->roles->first()->name == 'admin' or $user->roles->first()->name == 'supervisor'){
            $reportes = Visitas::where('estado', '1')->get();
          
            return view('modulos.reporte-visitas', ['reportes' => $reportes]);
        }else{
            $user = User::find($user->id);
            $reportes = $user->visitas->where('estado', '1');

            return view('modulos.reporte-visitas', ['reportes' => $reportes]);
        }

    }

    public function reportepdf()
    {
        $oficinas = Oficinas::all();
        $sedes = Sedes::all();

        $pdf = Pdf::loadView('modulos.reportePDF');
        return $pdf->download('Visitas.pdf');
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
            'dni' => [ 'required','digits:8',
               function ($attribute, $value, $fail) {
                    if (Visitas::where('dni', $value)->where('estado', '2')->exists()) {
                        
                        $ultimaVisita = Visitas::where('dni', $value)->orderBy('created_at', 'desc')->first();
                        $now = Carbon::now();
                        
                        $ultimaVisitaTime = Carbon::parse($ultimaVisita->created_at);
                        $diffInMinutes = $now->diffInMinutes($ultimaVisitaTime);
                        
                        if ($diffInMinutes < 10) {
                            $fail('Ya se registró una visita con este DNI en los últimos 10 minutos.');
                        }
                    }
                }
            ],
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

