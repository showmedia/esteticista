<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ClienteController;
use App\Http\Controllers\api\AgendaController;
use App\Http\Controllers\api\ServicoController;


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

Route::apiResource('clientes', App\Http\Controllers\api\ClienteController::class);
Route::apiResource('agendas', App\Http\Controllers\api\AgendaController::class);
Route::apiResource('servicos', App\Http\Controllers\api\ServicoController::class);




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
