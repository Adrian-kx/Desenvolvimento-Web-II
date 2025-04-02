<?php

namespace App\Http\Controllers;

use App\Models\SonoRecord;
use Illuminate\Http\Request;

class SonoController extends Controller
{
    public function sono()
    {
        return view('sono.index');
    }

    public function calcularSono(Request $request)
    {
        $nome = $request->nome;
        $data_nascimento = $request->data_nascimento;
        $horasSono = $request->horas;

        // Calculando a qualidade do sono
        $qualidadeSono = $horasSono >= 7 ? "Bom" : "Insuficiente";

        // Salvando os dados no banco
        $sonoRecord = SonoRecord::create([
            'nome' => $nome,
            'horas_sono' => $horasSono,
            'qualidade_sono' => $qualidadeSono,
            'data_nascimento' => $data_nascimento
        ]);

        // Retornando o resultado
        return view('sono.resultado', compact('horasSono', 'qualidadeSono'));
    }
}
