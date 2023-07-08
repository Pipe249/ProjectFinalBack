<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\contactoController;

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

/* API para consultar */
Route::get('/consultaContactos', [contactoController::Class,'Read']);
Route::post('/crearContactos', [contactoController::Class, 'Create']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
