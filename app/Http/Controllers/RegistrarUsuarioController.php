<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Visitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrarUsuarioController extends Controller
{
    public function __construct() {

        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('modulos.agregar-usuario');
    }

    public function SeeUsers()
    {
        $users = User::all();
        return view('modulos.ver-usuarios', ['users' => $users]);
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
    $validatedData = $request->validate([
            'nombre' => 'required',
            'rol' => 'required',
            'correo' => 'required',
            'contrasena' => 'required|same:confirm_contrasena',
            'confirm_contrasena' => 'required',
        ], [
            'nombre.required' => 'El campo Nombre es obligatorio.',
            'rol.required' => 'El campo Rol es obligatorio.',
            'correo.required' => 'El campo Email es obligatorio.',
            'contrasena.required' => 'El campo Contraseña es obligatorio.',
            'confirm_contrasena.required' => 'El campo Confirmar Contraseña es obligatorio.',
            'contrasena.same' => 'Las contraseñas no coinciden.',
        ]);

        $user = new User();
        $user->name = $request->input('nombre');
        $user->email = $request->input('correo');
        $user->password = Hash::make($request->input('contrasena'));
        $user->assignRole($request->input('rol'));
        
        if($user->save()){
            return redirect()->route('agregar-usuario.index')->with('message', 'Se registro exitosamente el usuario.');
        }else{
            return redirect()->route('agregar-usuario.index')->with('error', 'Ocurrió un error al registrar el usuario.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $user = User::findOrFail($id);
        $user->delete();

        if($user){
            return redirect()->route('ver-usuarios')->with('message', 'Se elimino correctamente al Usuario.');
        }else{
            return redirect()->route('ver-usuarios')->with('error', 'Ocurrió un error al eliminar al Usuario.');
        }
    }
}
