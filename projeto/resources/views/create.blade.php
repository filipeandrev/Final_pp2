@extends('layouts.app')

@section('content')
<h1>Teste</h1>

@section('content')
    <div class="container">
        <div class="col-md-12">
            <form action="{{ route('veiculos.store')}}" class="form-horizontal" method="POST">
                @csrf
                 <!-- <div class="row">
                    <div class="form-group">
                       <label for="">Nome do veículo</label>
                       <input type="text" class="form-control" name="modelo">
                    </div> -->
                 </div>
                 <div class="row">
                    <div class="from-group">
                        <label for="">Tipo do veículo</label>
                        <select type="text" class="form-control" name="tipo">
                            <option name="tipo" value="Carro">Carro</option>
                            <option name="tipo" value="Moto">Moto</option>
                            <option name="tipo" value="Bicicleta">Bicicleta</option>
                        </select>
                    </div>
                 </div>
                 <div class="row">
                    <button type="submit" class="btn btn-primary">Cadastrar Veiculo</button>
                </div>
            </form>
        </div>
    </div>

@endsection