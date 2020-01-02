<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Veiculo;
use App\Estacionamento;
use App\Aluno;

class VeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Veiculo $veiculos)
    {
        // dd('chegou aqui');
        // Veiculo::create($request->all());

        // $user = auth()->user()->id;
        // dd($user);

        $veiculos->tipo = $request->tipo;
        $veiculos->fk_funcionarios_id = auth()->user()->id;
        $veiculos->fk_alunos_id = auth()->user()->id;
        // $veiculo->fk_estacionamentos_id = auth()->user()->id;
        $veiculos->save();

        // $v = Veiculo::all();
        // dd($v);
        $user = auth()->user();

        // dd($user);

        return view('home')->with(['user' => $user]);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $id = auth()->user()->id;

        $aluno = Aluno::where('id', $id)->first();

        $veiculoss = $aluno->veiculos()->get();

        // dd($veiculoss);
        
        return view('home')->with(['veiculoss', $veiculoss]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
