<?php

use Illuminate\Database\Seeder;
use App\Funcionario;

class FuncionarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Funcionario::create([
            'nome' => 'Ranieri',
            'cpf' => '11111111111',
            'siape' => '123',
            'setor' => 'cradt',
            'cargo' => 'testador',
            'telefone' => '90909009',
            'email' => 'testeeee@gmail.com',
            'password' => bcrypt('teste123'),
        ]);
        //
    }
}
