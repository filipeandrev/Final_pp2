@extends('layouts.app')

@section('content')

<div class="container">

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>IF Parking</h1>
        <p class="lead">Este sistema tem a finalidade de servir como um controle de entrada e saída de veículos, para o acesso ao estacionamento do novo campus Igarassu.</p>
        <p><a class="btn btn-lg btn-success btn-success" href="{{ route('register') }}" role="button">Cadastre-se!</a></p>
      </div>

      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <h1>Cadastre seu carro</h1>
      <h5>Alunos e professores podem cadastrar seus veículos no estacinamento.</h5>
    </div>
    <div class="carousel-item">
      <h1>Controle de vagas</h1>
      <h5>Fique por dentro das vagas disponiveis no estacionamento.</h5>
    </div>
    <div class="carousel-item">
      <h1>Um ambiente mais organizado</h1>
      <h5>Com o controle de entrada e saída de veículos a organização do local fica bem mais acessivel.</h5>
    </div>
  </div>
</div>
  </body>
</html>

@endsection
