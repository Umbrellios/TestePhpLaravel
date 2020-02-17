@extends('welcome')
@section('content')

    <span class="links">

    </span>
    <div class="col text-center">
      <h1>Registros Armazenados</h1>
    </div>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Titulo</th>
      <th scope="col">Link</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach( $dados_capturados as $value){ ?>
        <tr>
        <td><?php echo $value->id; ?></td>
        <td><?php echo $value->titulo; ?></td>
        <td><?php echo $value->link; ?></td>
        <td><a class="btn btn-danger" href="{{ action("DadosSiteController@excluir", $value->id) }}">Excluir</a></td>
        </tr>
    <?php }?>
  </tbody>
</table>
<div class="row justify-content-start mt-4">
  <div class="col">
  <a class="btn btn-primary mt-4" href="{{ action('DadosSiteController@dashboard')}}">Voltar</a>
  </div>
</div>
@stop
