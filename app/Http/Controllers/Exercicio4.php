<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExercicioQuatrFormRequest;
use Illuminate\Http\Request;

class Exercicio4 extends Controller
{
    public function verificar(ExercicioQuatrFormRequest $request){
        if($request ->numero % 2 == 0){
            return json_encode([
                'mensagem' => 'Par'
            ]);
        } else{
            return json_encode([
                'mensagem' => 'Impar'
            ]);
        
        }
    }
}
