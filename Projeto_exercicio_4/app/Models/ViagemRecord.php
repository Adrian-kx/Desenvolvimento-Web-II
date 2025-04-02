<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViagemRecord extends Model
{
    use HasFactory;

    protected $table = 'viagems'; // Ou 'viagens' se você mudar o nome na migration

    protected $fillable = [
        'distancia',
        'consumo',
        'preco_combustivel'
    ];
}

