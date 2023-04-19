@extends('layouts.main')

@section('content')

<div class="container">
<br>
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="/clientes"> Clientes</a>  
       
      <form class="d-flex" role="search" action="/clientes" method="GET">
        <input class="form-control me-2" type="search" name="search" id="search" placeholder="Pesquise o cliente" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Pesquisar</button>
      </form>
    
  </div>
</nav>
  <hr>
  <table class="table table-striped table-hover">
<thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Telefone</th>
      <th scope="col" class="mobile-hidden">Email</th>
      <th scope="col">Serviços</th>
      <th scope="col">
        <a href="/user">Novo Cliente</a>
      </th>
    </tr>
  </thead>
  <tbody>
    @foreach($clientes->reverse() as $cliente)
        <tr>
            <td> {{$cliente->name ?? ''}} </td>
            <td> {{$cliente->telefone ?? ''}} </td>
            <td class="mobile-hidden"> {{$cliente->email ?? ''}} </td>
            <td> @if($cliente->servicos){{count($cliente->servicos) ?? '0'}} @else 0 @endif</td>
            <td> 
              <a href="/cliente/{{$cliente->id}}" class="btn btn-sm btn-success" >Ver</a>
              <a href="/cliente/edit/{{$cliente->id}}" class="btn btn-sm btn-secondary">Editar</a>
         
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection