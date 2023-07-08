<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\contactoController;
use App\Http\api\userController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* API para consultar, rutas formulario enlazado al front end*/
Route::get('/consultaContactos', [contactoController::Class,'Read']);
Route::post('/crearContactos', [contactoController::Class, 'Create']);

/* rutas de ejercicio CRUD */
Route::post('/registrarUsuario', [userController::Class, 'Create']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
