<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exercicio5 extends Controller
{
    public function divisivel(Request $request)
    {
        $n1 = $request->n1;

        if ($n1 % 4 == 0) {
            return json_encode([
                'mensagem' => 'é divisivel'
            ]);
        } else {
            return json_encode([
                'mensagem' => 'não é divisivel'
            ]);
        }
    }
}
