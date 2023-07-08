<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\registro;

class userController extends Controller
{
    public function Read (Request $request){
        $user = new registro();

        if($request->query('id')){
            $newUser = $user->find($request->query('id'));
        } else{
            $newUser = $user->all();
        }
        return response()->json($newUser);
    }

    public function Create (Request $request){
        $user = new registro();

        $user->Nombres = $request->input('Nombres');
        $user->Apellidos = $request->input('Apellidos');
        $user->TipoIdentificacion = $request->input('TipoIdentificacion');
        $user->NumeroIdentificacion = $request->input('NumeroIdentificacion');
        $user->Telefono = $request->input('Telefono');
        $user->Email = $request->input('Email');
        $user->Profesion = $request->input('Profesion');
        $user->Rol = $request->input('Rol');

        $user->save();

        $message=["message" => "Registro Realizado con exito!"];

        return response()->json($message, 200);

    }

    public function Update(Request $request, $id){
        // Buscar el registro existente por su ID
        $user = Registro::find($id);    

        if (!$user) {
            // si el registro no existe alertar
            $message = ["message" => "Registro no encontrado"];
            return response()->json($message, 404);
        }

        // Actualizar los campos del registro
        $user->Nombres = $request->input('Nombres');
        $user->Apellidos = $request->input('Apellidos');
        $user->TipoIdentificacion = $request->input('TipoIdentificacion');
        $user->NumeroIdentificacion = $request->input('NumeroIdentificacion');
        $user->Telefono = $request->input('Telefono');
        $user->Email = $request->input('Email');
        $user->Profesion = $request->input('Profesion');
        $user->Rol = $request->input('Rol');

        $user->save();

        $message = ["message" => "Datos actualizados con éxito"];
        return response()->json($message, 200);
    }

    public function Delete(Request $request, $id){
        // Buscar el registro existente por su ID
        $user = Registro::find($id);

        if (!$user) {
            $message = ["message" => "Registro no encontrado"];
            return response()->json($message, 404);
        }

        // Eliminar el registro
        $user->delete();

        $message = ["message" => "Registro eliminado con éxito"];
        return response()->json($message, 200);
    }
}
