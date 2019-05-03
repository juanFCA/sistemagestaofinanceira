<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $fillable = [
        'user_id', 
        'nome',
        'descricao',
        'receita',
        'cor'
    ];

    protected $guarded = ['id', 'created_at', 'update_at'];

    protected $table = 'categorias';
}
