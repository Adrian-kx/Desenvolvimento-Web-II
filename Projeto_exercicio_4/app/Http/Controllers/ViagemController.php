<?php

namespace App\Http\Controllers;

use App\Models\ViagemRecord;
use Illuminate\Http\Request;

class ViagemController extends Controller
{
    public function viagem()
    {
        return view('viagem.index');
    }

    public function calcularViagem(Request $request)
{
    $distancia = $request->distancia;
    $consumo = $request->consumo;
    $precoCombustivel = $request->preco;

    $custoViagem = ($distancia / $consumo) * $precoCombustivel;

    // Salvar no banco
    ViagemRecord::create([
        'distancia' => $distancia,
        'consumo' => $consumo,
        'preco_combustivel' => $precoCombustivel
    ]);

    return view('viagem.resultado', compact('custoViagem'));
}
}
