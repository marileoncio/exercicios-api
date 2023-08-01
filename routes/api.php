<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('exercicio/um', 
[ExercicioUmController::class, 'multiplicar']);

Route::post('exercicio/dois', 
[ExercicioDoisController::class, 'retornarMaior']);

Route::post('exercicio/3', 
[Exercicio3Controller::class, 'media']);

Route::post('exercicio/quatro', 
[ExercicioQuatroController::class, 'verificar']);

Route::post('exercicio/5', 
[Exercicio5Controller::class, 'divisivel']);

