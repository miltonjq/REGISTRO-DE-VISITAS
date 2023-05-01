<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ActualizarPasswordController extends Controller
{
    
    public function update(Request $request, string $id ){
        $validatedData = $request->validate([
            'contrasena' => 'required|same:confirm_contrasena',
            'confirm_contrasena' => 'required',
        ], [
            'contrasena.required' => 'El campo Contraseña es obligatorio.',
            'confirm_contrasena.required' => 'El campo Confirmar Contraseña es obligatorio.',
            'contrasena.same' => 'Las contraseñas no coinciden.',
        ]);


        $user = User::findOrFail($id);
        $user->password = Hash::make($request->input('contrasena'));
                
        if($user->save()){
            session(['messageUser' => 'Se actualizo correctamente la contraseña.']);
            return view('modulos.editar-usuario', ['user' => $user]);
        }else{
            session(['errorUser' => 'No se pudo actualizar la contrseña.']);
            return view('modulos.editar-usuario', ['user' => $user]);
        }
          
    }
}
