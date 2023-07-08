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
            $newUser = $contacto->all();
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
}
