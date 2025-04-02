<?php

use App\Http\Controllers\IMCController;
use App\Http\Controllers\SonoController;
use App\Http\Controllers\ViagemController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/IMC', [IMCController::class, 'imc']);
Route::post('/IMC', [IMCController::class, 'calcularIMC']);

Route::get('/Sono', [SonoController::class, 'sono']);
Route::post('/Sono', [SonoController::class, 'calcularSono']);

Route::get('/Viagem', [ViagemController::class, 'viagem']);
Route::post('/Viagem', [ViagemController::class, 'calcularViagem']);

