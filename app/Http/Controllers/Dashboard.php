<?php

namespace App\Http\Controllers;

use App\Models\Oficinas;
use App\Models\Sedes;
use App\Models\User;
use App\Models\Visitas;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index()
    {
        $visitas = Visitas::count();
        $oficinas = Oficinas::count();
        $sedes = Sedes::count();
        
        $personeros = User::whereHas('roles', function ($query) {
            return $query->where('name', 'guardiania');
        })->count();

        
        return view('dashboard', ['visitas' => $visitas, 'oficinas' => $oficinas, 'sedes' => $sedes, 'personeros' => $personeros]);
    }
}
