<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\VisitasController;
use App\http\Controllers\OficinasController;
use App\http\Controllers\SedesController;

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
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('registrar-visita', VisitasController::class);
    
    Route::resource('agregar-oficina', OficinasController::class);

    Route::resource('agregar-sedes', SedesController::class);
});

