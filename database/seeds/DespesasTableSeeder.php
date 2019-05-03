<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DespesasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('despesas')->insert([
            'user_id'=> 1,
            'nome' => 'Bahamas',
            'valor' => 345.78,
            'data_vencimento' => '2019-05-07',
            'descricao' => 'Compra de alimentos no supermercado',
            'categoria_id' => 4,
            'forma_pagamento' => 'Dinheiro',
            'pago' => 1,
            'parcelado' => 0,
            'dia_cobranca_parcela' => 0,
            'num_parcelas' => 0,
            'notificar' => 0,
            'num_meses' => 0,
        ]);

        // Exibe uma informação no console
        $this->command->info('Despesa Bahamas criada com Sucesso');
        
        DB::table('despesas')->insert([
            'user_id'=> 1,
            'nome' => 'Ônibus Urbano',
            'valor' => 145.55,
            'data_vencimento' => '2019-05-07',
            'descricao' => 'Compra de créditos no vale-transporte',
            'categoria_id' => 3,
            'forma_pagamento' => 'Dinheiro',
            'pago' => 1,
            'parcelado' => 0,
            'dia_cobranca_parcela' => 0,
            'num_parcelas' => 0,
            'notificar' => 0,
            'num_meses' => 0,
        ]);

        // Exibe uma informação no console
        $this->command->info('Despesa Onibus Urbano criada com Sucesso');
        
        DB::table('despesas')->insert([
            'user_id'=> 1,
            'nome' => 'Casa de Praia',
            'valor' => 450.50,
            'data_vencimento' => '2019-05-07',
            'descricao' => 'Aluguel de Casa para veraneio',
            'categoria_id' => 5,
            'forma_pagamento' => 'Dinheiro',
            'pago' => 1,
            'parcelado' => 0,
            'dia_cobranca_parcela' => 0,
            'num_parcelas' => 0,
            'notificar' => 0,
            'num_meses' => 0,
        ]);

        // Exibe uma informação no console
        $this->command->info('Despesa Casa de Praia criada com Sucesso');

    }
}
