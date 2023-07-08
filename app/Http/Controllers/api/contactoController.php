<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\ContactosFormulario;

class contactoController extends Controller
{
    public function Read (Request $request){
        $contacto = new ContactosFormulario();

        if($request->query('id')){
            $newContacto = $contacto->find($request->query('id'));
        } else{
            $newContacto = $contacto->all();
        }
        return response()->json($newContacto);
    }

    public function Create (Request $request){
        $contacto = new ContactosFormulario();

        $contacto->Nombre = $request->input('Nombre');
        $contacto->Email = $request->input('Email');
        $contacto->Telefono = $request->input('Telefono');

        $contacto->save();

        $message=["message" => "Datos guardados con exito!"];

        return response()->json($message, 200);

    }
}
