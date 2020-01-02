<?php

use Illuminate\Database\Seeder;
use App\Aluno;

class AlunoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Aluno::create([
            'nome' => 'Alunoteste',
            'cpf' => 'matricula',
            'matricula' => '20182infig0000',
            'turma' => 'ipi',
            'telefone' => '90909090',
            'email' => 'alunoo@gmail.com',
            'password' => bcrypt('teste123'),
        ]);
        //
    }
}
