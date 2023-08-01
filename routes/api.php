<?php

use App\Http\Controllers\Exercicio;
use App\Http\Controllers\Exercicio2;
use App\Http\Controllers\Exercicio3;
use App\Http\Controllers\Exercicio4;
use App\Http\Controllers\Exercicio5;
use App\Http\Controllers\Exercicio6;
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
[Exercicio1::class, 'multiplicar']);

Route::post('exercicio/dois', 
[Exercicio2::class, 'retornarMaior']);

Route::post('exercicio/3', 
[Exercicio3::class, 'media']);

Route::post('exercicio/quatro', 
[Exercicio4::class, 'verificar']);

Route::post('exercicio/5', 
[Exercicio5::class, 'divisivel']);

Route::post('exercicio/seis',
[Exercicio6::class, 'verificarIdade']);


