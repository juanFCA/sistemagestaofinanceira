<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReceitasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('receitas')->insert([
            'user_id'=> 1,
            'nome' => 'Casa de Três Rios',
            'valor' => 250.00,
            'data_vencimento' => '2019-05-07',
            'descricao' => 'Aluguel da Casa de Três Rios',
            'categoria_id' => 5,
            'forma_pagamento' => 'Dinheiro',
            'disponivel' => 1,
            'fixa' => 1,
            'recorrente' => 0,
            'num_meses' => 0,
        ]);

        // Exibe uma informação no console
        $this->command->info('Receita Casa de Três Rios criada com Sucesso');

        DB::table('receitas')->insert([
            'user_id'=> 1,
            'nome' => 'Salário IPN',
            'valor' => 4250.00,
            'data_vencimento' => '2019-05-07',
            'descricao' => 'Receita no meu Emprego na IPN',
            'categoria_id' => 1,
            'forma_pagamento' => 'Dinheiro',
            'disponivel' => 1,
            'fixa' => 1,
            'recorrente' => 0,
            'num_meses' => 0,
        ]);

        // Exibe uma informação no console
        $this->command->info('Receita Salário IPN criada com Sucesso');

        DB::table('receitas')->insert([
            'user_id'=> 1,
            'nome' => 'Notebook Fran',
            'valor' => 75.00,
            'data_vencimento' => '2019-05-07',
            'descricao' => 'Concerto realizado na placa-mãe',
            'categoria_id' => 2,
            'forma_pagamento' => 'Dinheiro',
            'disponivel' => 1,
            'fixa' => 0,
            'recorrente' => 0,
            'num_meses' => 0,
        ]);

        // Exibe uma informação no console
        $this->command->info('Receita Notebook Fran criada com Sucesso');

        DB::table('receitas')->insert([
            'user_id'=> 1,
            'nome' => 'Telhado Colonial Maria',
            'valor' => 750.00,
            'data_vencimento' => '2019-05-07',
            'descricao' => 'Pequeno Telhado feito na varanda',
            'categoria_id' => 2,
            'forma_pagamento' => 'Dinheiro',
            'disponivel' => 1,
            'fixa' => 0,
            'recorrente' => 0,
            'num_meses' => 0,
        ]);

        // Exibe uma informação no console
        $this->command->info('Receita Telhado Colonial Maria criada com Sucesso');

    }
}
