@extends('welcome')
@section('content')
  
    <div class="links">
        <a href="<?php echo action("UsuarioLoginController@logout"); ?>">Logout</a>
    </div>
    <span class="links">
      Usuário Autendicado: {{$usuario}}
    </span>

    <section>
      <form action="{{ action('DadosSiteController@dadosSite') }}"method="POST">
        @csrf
          <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-8 col-xl-6">
              <div class="row">
                <div class="col text-center">
                  <h1>Parametro de Busca</h1>
                </div>
              </div>
              @if(Session::has("alert"))
                <div class="alert alert-primary"><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                     {{ session('alert') }}
                </div>
              @endif

              <div class="row align-items-center">
                <div class="col mt-4">
                  <input type="text"  name="busca" class="form-control" placeholder="Digite o valor para busca!" required>
                </div>
              </div>
              <div class="row justify-content-start mt-4">
                <div class="col">
                <input type="submit" class="btn btn-primary mt-4" value="Capturar">
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
      <div class="row justify-content-start mt-4">
        <div class="col">
        <a class="btn btn-primary mt-4" href="{{ action('DadosSiteController@listar')}}">Artigos</a>
        </div>
      </div>
    </section>
@stop
