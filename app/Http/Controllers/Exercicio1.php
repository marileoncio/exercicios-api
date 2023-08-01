<?php

namespace App\Http\Controllers;

use App\Http\Requests\Exercicio1FormRequest;
use App\Http\Requests\ExercicioUmFormRequest;
use Illuminate\Http\Request;

class Exercicio1 extends Controller

{
    public function multiplicar(ExercicioUmFormRequest $request){
        $primeiraEntrada = $request->primeiro_numero;
        $segundaEntrada = $request->segundo_numero;   

        return json_encode([
            'resultado' => $primeiraEntrada * $segundaEntrada
        ]); 
    }
}

