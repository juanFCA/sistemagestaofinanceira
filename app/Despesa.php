<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Despesa extends Model
{
    protected $fillable = [
        'user_id',
        'nome',
        'valor',
        'data_vencimento',
        'descricao',
        'categoria_id',
        'forma_pagamento',
        'pago',
        'parcelado',
        'dia_cobranca_parcela',
        'num_parcelas',
        'notificar',
        'num_meses'
    ];

    protected $guarded = ['id', 'created_at', 'update_at'];

    protected $table = 'despesas';
}
