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

        if($user->roles->first()->name == 'admin'){
            $reportes = Visitas::where('estado', '2')->get();
          
            return view('modulos.registrar-salida', ['reportes' => $reportes]);
        }else{
            $reportes = User::find($user->id);

            $reportes = $reportes->visitas;

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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
