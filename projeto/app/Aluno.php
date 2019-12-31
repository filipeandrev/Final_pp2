<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Aluno extends Authenticatable
{
 	protected $table = 'alunos';

    protected $fillable = [
    	'nome',
        'cpf',
        'matricula',
        'turma',
        'telefone',
        'email',
        'password'
    ];


    protected $hidden = [
     	'password'
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

}
