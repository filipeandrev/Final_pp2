<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Veiculo;


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

    public function veiculos(){
        return $this->hasMany(Veiculo::class, 'fk_alunos_id', 'id');
    }

}
