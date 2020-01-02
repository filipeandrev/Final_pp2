<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;


class Funcionario extends Authenticable
{
	protected $table = 'funcionarios';

	protected $guard = 'funcionario';

    protected $fillable = [
    	'nome',
    	'cpf',
    	'siape', 
    	'setor', 
    	'cargo', 
    	'telefone', 
    	'email', 
    	'password'];

    protected $hidden = [
    	'password'
    ];	

    protected $guarded = [

    	'id',
    	'created_at',
    	'update_at'
    ];
}
