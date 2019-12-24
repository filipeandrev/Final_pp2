<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <title>IF Parking</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light border border-left rounded">
  <a class="navbar-brand" href="{{ url('/') }}">IF Parking</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="{{ url('/login') }}">Entrar</a>
    </div>
  </div>
        </nav>

    </div>
<main>
    @yield('content')
</main>
<footer class="mt-5 bg-dark">
  <div class="container pt-4">
      <div class="row">
          <div class="col-sm-4">
              <h5 class="link-color">Sobre Nós</h5>
              <a href="{{ asset('#') }}">Desenvolvedores</a>
          </div>
          <div class="col-sm-4">
              <h5 class="link-color">Suporte</h5>
              <a href="{{ asset('#') }}">Ajuda</a>
          </div>
          <div class="col-sm-4 info">
              <h5 class="link-color text-center">Informações</h5>
              <p class="text-muted">Este sistema tem a finalidade de servir como um controle de entrada e saída de veículos, para o acesso ao estacionamento do novo campus Igarassu.</p>
          </div>
      </div>
  </div>
  <div class="row ml-4">
    <div>
      <p class="text-muted">IF Parking © 2020</p>
    </div>  
  </div>
</footer>
</body> 