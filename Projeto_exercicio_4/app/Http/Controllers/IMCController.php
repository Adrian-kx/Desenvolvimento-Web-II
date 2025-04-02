<?php

namespace App\Http\Controllers;

use App\Models\ImcRecord;
use Illuminate\Http\Request;

class IMCController extends Controller
{
    public function imc()
    {
        return view('imc.index');
    }

    public function calcularIMC(Request $request)
    {
        // Pegando os dados do formulário
        $nome = $request->nome;
        $data_vencimento = $request->data_vencimento;
        $altura = $request->altura;
        $peso = $request->peso;

        // Calculando o IMC
        $imc = $peso / ($altura * $altura);
        $resultado = $this->classificarIMC($imc);

        // Salvando os dados no banco
        $imcRecord = ImcRecord::create([
            'nome' => $nome,
            'data_vencimento' => $data_vencimento,
            'peso' => $peso,
            'altura' => $altura,
            'imc' => $imc,
            'classificacao' => $resultado
        ]);

        // Retornando o resultado
        return view('imc.resultado', compact('imc', 'resultado'));
    }

    private function classificarIMC($imc)
    {
        if ($imc < 18.5) return "Abaixo do peso";
        if ($imc < 24.9) return "Peso normal";
        if ($imc < 29.9) return "Sobrepeso";
        return "Obesidade";
    }
}
