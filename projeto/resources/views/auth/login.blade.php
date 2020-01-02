@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">

                     <div class="position-relative btn-alunos"><button type="button" class="btn btn-info">Sou Aluno</button></div> 

                    <div class="position-relative btn-funcionarios"><button type="button" class="btn btn-info">Sou Funcionário</button></div>

                    <div class = 'alu'>
                    <form method="post" action="{{ route('login') }}">
                        @csrf
                        
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail:') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha:') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    
                                    
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Entrar') }}
                                </button>

                                <hr width="50%" align="left">
                                <div>
                                
                                    <p>Não tem registro?
                                    <a class="btn btn-link" href="{{ route('register') }}">
                                        {{ __('Cadastre-se') }}
                                    </a>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>


                <div class = 'func'>
                <form method="post" action="{{ route('log') }}">
                        @csrf
                        
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail:') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha:') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">                                   

                                    
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Entrar') }}
                                </button>

                            
                                <hr width="50%" align="left">
                                <div>
 
                                    <p>Não tem registro?
                                    <a class="btn btn-link" href="{{ route('register') }}">
                                        {{ __('Cadastre-se') }}
                                    </a>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
   <script>
                        $(document).ready(function(){
                         console.log('run');

                           let btnalu = $('.btn-alunos');
                           let btnfun = $ ('.btn-funcionarios'); 

                         btnalu.on('click', function(evt){
                         evt.preventDefault();
                         $(".alu").css('display', 'block');
                         $(".func").css('display', 'none');
                         })

                         btnfun.on('click', function(evt){
                         evt.preventDefault();
                         $(".func").css('display', 'block');
                         $(".alu").css('display', 'none');
                         })
                        })
                    </script>
       
            </div>
        </div>
    </div>
</div>
@endsection