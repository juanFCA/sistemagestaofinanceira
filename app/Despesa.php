<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Despesa extends Model
{
    protected $fillable = [
        'nome',
        'descricao',
        'recorrente',
        'categoria',
        'data',
        'valor'
    ];
}
