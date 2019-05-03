<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receita extends Model
{
    protected $fillable = [
        'user_id',
        'nome',
        'valor',
        'data_vencimento',
        'descricao',
        'categoria_id',
        'forma_pagamento',
        'disponivel',
        'fixa',
        'recorrente',
        'num_meses'
    ];
    
    protected $guarded = ['id', 'created_at', 'update_at'];

    protected $table = 'receitas';
}
