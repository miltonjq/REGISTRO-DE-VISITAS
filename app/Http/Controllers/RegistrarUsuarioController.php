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
        session(['messageUser' => '']);
        session(['errorUser' => '']);
        
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
            'dni' => 'required',
            'telefono' => 'required',
        ], [
            'nombre.required' => 'El campo Nombre es obligatorio.',
            'rol.required' => 'El campo Rol es obligatorio.',
            'correo.required' => 'El campo Email es obligatorio.',
            'contrasena.required' => 'El campo Contraseña es obligatorio.',
            'confirm_contrasena.required' => 'El campo Confirmar Contraseña es obligatorio.',
            'contrasena.same' => 'Las contraseñas no coinciden.',
            'dni.required' => 'El campo DNI es obligatorio.',
            'telefono.required' => 'El campo Telefono es obligatorio.',
        ]);

        $user = new User();
        $user->name = $request->input('nombre');
        $user->email = $request->input('correo');
        $user->dni = $request->input('dni');
        $user->telefono = $request->input('telefono');
        
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
        
        $user = User::findOrFail($id);
        
        // dd($user);
        if($user){
            return view('modulos.editar-usuario', ['user' => $user]);
        }else{            
            return redirect()->route('ver-usuarios')->with('error', 'No se encontro el usuario en la  base de datos.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'dni' => 'required|digits:8',
            'nombre' => 'required',
            'correo' => 'required',
            'telefono' => 'required'
        ], [
            'dni.required' => 'El campo DNI es obligatorio.',
            'dni.digits' => 'El campo DNI debe contener 8 números.',
            'nombre.required' => 'El campo Nombres es obligatorio.',
            'correo.required' => 'El campo Email es obligatorio.',
            'telefono.required' => 'El campo Telefono es obligatorio.'
        ]);

        $user = User::findOrFail($id);
        $user->dni = $request->input('dni');
        $user->name = $request->input('nombre');
        $user->email = $request->input('correo');
        $user->telefono = $request->input('telefono');
        

        
        if($user->save()){
            session(['messageUser' => 'Se actualizo exitosamente el usuario.']);
            return view('modulos.editar-usuario', ['user' => $user]);
            
        }else{
            session(['errorUser' => 'No se pudo actualizar el usuario.']);
            return view('modulos.editar-usuario', ['user' => $user]);
        }
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
