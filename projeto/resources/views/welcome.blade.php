@extends('layouts.app')

@section('content')

<div class="container">

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>IF Parking</h1>
        <p class="lead">Este sistema tem a finalidade de servir como um controle de entrada e saída de veículos, para o acesso ao estacionamento do novo campus Igarassu.</p>
        <p><a class="btn btn-lg btn-success btn-success" href="{{ route('register') }}" role="button">Cadastre-se!</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Cadastre seu carro</h2>
          <p>Alunos e professores podem cadastrar seus veículos.</p>
        </div>
        <div class="col-lg-4">
          <h2>Controle de vagas</h2>
          <p>Saiba das vagas disponiveis no estacionamento.</p>
       </div>
        <div class="col-lg-4">
          <h2>Um ambiente mais organizado</h2>
          <p>Com o controle de entrada e saída de veículos a organização do local fica bem mais acessivel.</p>
        </div>
      </div>
    </div>
  </body>
</html>

@endsection
