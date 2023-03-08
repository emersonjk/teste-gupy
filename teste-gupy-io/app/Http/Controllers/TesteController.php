<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\For_;

class TesteController extends Controller
{
    public function indice()
    {
        $indice = 13;
        $soma = 0;
        $k = 0;
        while ($k < $indice) { 
            $k = $k + 1;
            $soma = $soma + $k;
        }

        return view('results', compact('soma')) ;
    }
    public function fibonacci(Request $request)
    {
        $input = $request->except('_token');

        $numero = $input['numero'];

        $a = 0;
        $b = 1;
        $sequencia = 0;

        while ($sequencia < $numero) {
        $sequencia = $a + $b;
        $a = $b;
        $b = $sequencia;
        }

        if ($sequencia == $numero) {
            $fibo = 'O número "'. $numero .'" pertence à sequência de Fibonacci.';
        }else
            $fibo = 'O número"'. $numero .'" não pertence à sequência de Fibonacci.';


        return view('results', compact('fibo')) ;

    }
    public function padrao()
    {
        $padrao['a'] = 'Sequência de numeros Impares, 9';
        $padrao['b'] = 'Sequência do numero anterior por multiplicado por 2, 2 x 64 = 128';
        $padrao['c'] = 'Sequência de numeros elevados ao quadrado, 7^2 = 49';
        $padrao['d'] = 'Sequência de numeros pares elevado ao quadrado, 10^2 = 100';
        $padrao['e'] = 'Sequência de Fibonnaci (somar os dois ultimos numeros), 13';
        $padrao['f'] = 'Sequência de numeros que começam com D, 2OO (duzentos)';

        return view('results', compact('padrao')) ;
    }
    public function estrada()
    {
        $estrada = 'O carro estará mais proximo de Ribeirão preto, pois quando eles se encontrarem o caminhão
        teria percorrido 40km de estrada, e o carro 55km. O que significa que o carro estar a 55km de distância de Ribeirão e o caminhão à 60km (100km - 40km, já percorrido).
        Cheguei o resultado fazendo o tempo do caminhão e do carro, um leva 55min e outro 85min (considerando o pedagio). tirando a diferença... 30min ou seja 0,5 horas seria o tempo que cada um percorreu antes de se cruzarem.
        o caminhão teria percorrido 40km de estrada, e o carro 55km.';

        return view('results', compact('estrada')) ;
    }
    public function string(Request $request)
    {
        $input = $request->except('_token');

        $stringNormal = $input['string'];
        $string = '';
        $tamanho = strlen($stringNormal);

        for ($i= $tamanho-1; $i >= 0 ; $i--) { 
            $string .= $stringNormal[$i];
        }

        return view('results', compact('string','stringNormal')) ;

    }
}
