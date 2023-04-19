@extends('layouts.main')

@section('title', 'Listar formas de pagamento - Gileade Despachante')

@section('content')

<div class="container">
  <br>
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="/pacotes"> Pacotes</a>  
       
      <form class="d-flex" role="search" action="/pacotes" method="GET">
        <input class="form-control me-2" type="search" name="search" id="search" placeholder="Pesquise Pacotes" aria-label="Search">
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
      <th scope="col">Validade</th>

      <th scope="col">
        <a href="/pacote">Novo Pacote</a>
      </th>
    </tr>
  </thead>
  <tbody>
    @foreach($pacotes as $pacote)
        <tr>
            <td class="uppercase"> {{$pacote->description}} </td>
            <td> R$ {{number_format($pacote->valor,2,',','.')}} </td>
            <td> {{$pacote->validade}} MESES </td>
         
            <td> 
                  <a href="/pacote/{{$pacote->id}}" class="btn btn-sm btn-warning">Abrir</a>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection