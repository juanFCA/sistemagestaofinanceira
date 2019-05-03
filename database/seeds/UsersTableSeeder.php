<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Administrador do Sistema',
            'email' => 'admin@admin.com',
            'password' => bcrypt('adminsistema'),
        ]);

        // Exibe uma informação no console
        $this->command->info('User admin@admin.com criado com Sucesso');
    }
}
