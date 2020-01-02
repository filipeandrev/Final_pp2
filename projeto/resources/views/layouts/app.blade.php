<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>IF Parking</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/">



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light border border-left rounded ">
  <a class="navbar-brand" href="{{ url('/') }}">
     <img class="img-logo" src="{{ asset('img/logo.png') }}">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse ">
    <div class="navbar-nav">
    <li class="nav-item"><a class="btn btn-md btn-success" href="{{ url('/login') }}">Entrar</a></li>
    </div>
  </div>
        </nav>

    </div>
<main>
    @yield('content')
</main>

 </div>
 <footer class="py-4 bg-success text-black-50">
  <div class="container text-center">
   <small>IF PARKING &copy; 2020</small>
   </div>
 </footer>
</body> 