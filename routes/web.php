<?php

use App\Http\Controllers\ActualizarPasswordController;
use App\Http\Controllers\Dashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitasController;
use App\Http\Controllers\OficinasController;
use app\Http\Controllers\RegistrarSalida;
use App\Http\Controllers\RegistrarSalidaController;
use App\Http\Controllers\SedesController;
use App\Http\Controllers\RegistrarUsuarioController;

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

    Route::resource('registrar-visita', VisitasController::class)->names('registrar-visita');
    Route::get('reporte-visitas', [VisitasController::class, 'reporte'])->name('reporte-visitas');
    Route::get('reportePDF', [VisitasController::class, 'reportepdf'])->name('reportePDF');

    Route::resource('agregar-oficina', OficinasController::class)->names('agregar-oficina');

    Route::resource('agregar-sedes', SedesController::class)->names('agregar-sedes');

    Route::resource('agregar-usuario', RegistrarUsuarioController::class)->names('agregar-usuario');
    Route::get('ver-usuarios', [RegistrarUsuarioController::class, 'SeeUsers'])->name('ver-usuarios');
    Route::put('actualizar-password/{id}', [ActualizarPasswordController::class, 'update'])->name('actualizar-password');

    Route::resource('registrar-salida', RegistrarSalidaController::class)->names('registrar-salida');
});
