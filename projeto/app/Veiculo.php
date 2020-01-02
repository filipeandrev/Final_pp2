<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Funcionario;
use App\Aluno;

class Veiculo extends Model
{
    protected $table = 'veiculos';
    protected $fillable = ['tipo'];
}
