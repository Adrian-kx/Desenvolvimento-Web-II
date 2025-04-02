<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImcRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'data_vencimento',
        'peso',
        'altura',
        'imc',
        'classificacao'
    ];
}
