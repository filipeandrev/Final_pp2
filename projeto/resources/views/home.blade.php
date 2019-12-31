@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Bem-vindo,
                @if (Auth::check())
                    {{ Auth::user()-> nome }}
                    @endif !
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif 
                                     
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalExemplo">
Cadastre seu veículo
</button>

<table class="table table-sm mt-5 text-center">
    <thead class="thead-light">
        <tr>
            <th>Tipo</th>
			<th>Modelo</th>
			<th>Placa</th>
            <th>Cor</th>
			<th>Ano</th>
        </tr>
        
        <!-- Onde ficará as informações do veículo após cadastro -->
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                
            </tr>
</table>

<a class="btn btn-md btn-info" href="{{ route('logout') }}">Sair</a>


<!-- Modal -->
<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro de veículo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
      <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Tipo:</span>
  </div>
  <input type="text" class="form-control" aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Modelo:</span>
  </div>
  <input type="text" class="form-control" aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Placa:</span>
  </div>
  <input type="text" class="form-control" aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Cor:</span>
  </div>
  <input type="text" class="form-control" aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Ano:</span>
  </div>
  <input type="number" class="form-control" aria-label="Exemplo do tamanho do input" aria-describedby="inputGroup-sizing-default">
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar mudanças</button>
      </div>
    </div>
  </div>
</div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
