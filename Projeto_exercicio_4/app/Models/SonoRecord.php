<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SonoRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'horas_sono',
        'qualidade_sono',
        'data_nascimento'
    ];
}
