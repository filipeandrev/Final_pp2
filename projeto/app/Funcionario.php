<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = ['nome', 'cpf', 'siape', 'setor', 'cargo', 'telefone', 'email', 'password'];
    protected $table = 'funcionarios';
}
