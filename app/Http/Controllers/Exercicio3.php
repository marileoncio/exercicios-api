<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExercicioTresFormRequest;
use Illuminate\Http\Request;

class Exercicio3 extends Controller
{
    public function media(ExercicioTresFormRequest $request){
        $n1 = $request-> n1;
        $n2 = $request-> n2;
        $n3 = $request-> n3;

        return json_encode([
            'resultado' => ($n1 +$n2 + $n3) / 3
        ]);
    }
}
