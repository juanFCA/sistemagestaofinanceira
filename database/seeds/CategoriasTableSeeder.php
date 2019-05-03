<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'user_id'=> 1,
            'nome' => 'Salário',
            'descricao' => 'Renda obtida em Emprego Formal',
            'receita' => 0,
            'cor' => '#00BFFF',
        ]);

        // Exibe uma informação no console
        $this->command->info('Categoria Salário criada com Sucesso');

        DB::table('categorias')->insert([
            'user_id'=> 1,
            'nome' => 'Extra',
            'descricao' => 'Renda obtida em Pequenos Serviços',
            'receita' => 0,
            'cor' => '#4169E1',
        ]);

        // Exibe uma informação no console
        $this->command->info('Categoria Extra criada com Sucesso');

        DB::table('categorias')->insert([
            'user_id'=> 1,
            'nome' => 'Transporte',
            'descricao' => 'Despesa obtida com Meios de Locomoção',
            'receita' => 1,
            'cor' => '#DEB887',
        ]);

        // Exibe uma informação no console
        $this->command->info('Categoria Transporte criada com Sucesso');

        DB::table('categorias')->insert([
            'user_id'=> 1,
            'nome' => 'Alimentação',
            'descricao' => 'Despesa obtida com a compra de Alimentos',
            'receita' => 1,
            'cor' => '#FF6347',
        ]);

        // Exibe uma informação no console
        $this->command->info('Categoria Alimentação criada com Sucesso');

        DB::table('categorias')->insert([
            'user_id'=> 1,
            'nome' => 'Imóvel',
            'descricao' => 'Renda obtida em Venda/Aluguel de Imóveis',
            'receita' => 2,
            'cor' => '#BC8F8F',
        ]);

        // Exibe uma informação no console
        $this->command->info('Categoria Imóvel criada com Sucesso');
    
    }
}
