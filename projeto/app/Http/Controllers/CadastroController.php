<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use App\Funcionario;
use Illuminate\Support\Facades\Hash;

class CadastroController extends Controller
{
 
 protected function cadastrar(Request $request){
       if ($request->get('tipo')=="aluno"){
       		 $cad = new Aluno([
            'nome' => $request->get('name'),
            'cpf' => $request->get('cpf'),
            'matricula' => $request->get('matricula'),
            'turma' => $request->get('turma'),
            'telefone' => $request->get('telefone'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            
        ]);
       	}elseif($request->get('tipo')=="funcionario"){
       		 $cad = new Funcionario([
            'nome' => $request->get('name'),
            'cpf' => $request->get('cpf'),
            'siape' => $request->get('siape'),
            'setor' => $request->get('setor'),
            'cargo' => $request->get('cargo'),
            'telefone' => $request->get('telefone'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password')),
            
        ]);

       	}
        $cad->save();
        return view('home');
       
    }
}
