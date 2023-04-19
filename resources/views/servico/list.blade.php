@extends('layouts.main')

@section('title', 'Listar formas de pagamento - Gileade Despachante')

@section('content')

<div class="container">
  <br>
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="/servicos"> Serviços</a>  
       
      <form class="d-flex" role="search" action="/servicos" method="GET">
        <input class="form-control me-2" type="search" name="search" id="search" placeholder="Pesquise Serviços" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
      </form>
    
  </div>
</nav>
  <hr>
  <table class="table table-striped table-hover">
<thead>
    <tr>
      <th scope="col">Descrição</th>
      <th scope="col">Valor</th>
      <th scope="col">Tempo</th>

      <th scope="col">
        <a href="/servico">Novo Serviço</a>
      </th>
    </tr>
  </thead>
  <tbody>
    @foreach($servicos as $servico)
        <tr>
            <td class="uppercase"> {{$servico->description}} </td>
            <td> {{number_format($servico->valor,2,',','.')}} </td>
            <td> {{$servico->tempo}} MINUTOS </td>
         
            <td> 
                  <a href="/servico/{{$servico->id}}" class="btn btn-sm btn-warning">Editar</a>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection