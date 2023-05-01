<?php

use App\Http\Controllers\ActualizarPasswordController;
use App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\VisitasController;
use App\http\Controllers\OficinasController;
use App\Http\Controllers\RegistrarSalida;
use App\Http\Controllers\RegistrarSalidaController;
use App\http\Controllers\SedesController;
use App\http\Controllers\RegistrarUsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboard');

    Route::resource('registrar-visita', VisitasController::class);
    Route::get('reporte-visitas', [VisitasController::class, 'reporte']);
    Route::get('reportePDF', [VisitasController::class, 'reportepdf'])->name('reportePDF');
    
    Route::resource('agregar-oficina', OficinasController::class);

    Route::resource('agregar-sedes', SedesController::class);
    
    Route::resource('agregar-usuario', RegistrarUsuarioController::class);
    Route::get('ver-usuarios', [RegistrarUsuarioController::class, 'SeeUsers'])->name('ver-usuarios');
    Route::put('actualizar-password/{id}', [ActualizarPasswordController::class, 'update'])->name('actualizar-password');
    
    Route::resource('registrar-salida', RegistrarSalidaController::class)->names('registrar-salida');
});


