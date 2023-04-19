@extends('layouts.main')

@section('title', 'Listar formas de pagamento - Gileade Despachante')

@section('content')

<div class="container">
  <br>

  <hr>
  <table class="table table-striped table-hover">
<thead>
    <tr>
      <th scope="col">Descrição</th>
      <th scope="col">Taxa</th>
      <th scope="col">
        <a href="/forma">Nova Forma</a>
      </th>
    </tr>
  </thead>
  <tbody>
    @foreach($formas as $forma)
        <tr>
            <td class="uppercase"> {{$forma->description}} </td>
            <td> {{$forma->taxa}} % </td>
            <td> 
                  <a href="/forma/{{$forma->id}}" class="btn btn-sm btn-warning">Editar</a>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection