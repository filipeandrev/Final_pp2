<?php

use Illuminate\Database\Seeder;
use App\Aluno;
use App\Funcionario;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AlunoTableSeeder::class);
        $this->call(FuncionarioTableSeeder::class);
    }
}
