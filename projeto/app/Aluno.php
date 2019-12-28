<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = ['nome', 'cpf', 'matricula', 'turma', 'telefone', 'email', 'password'];
    protected $table = 'alunos';
}
