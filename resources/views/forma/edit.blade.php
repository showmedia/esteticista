@extends('layouts.main')

@section('title', 'cadastrar Forma Pagamento - Gileade Despachante')

@section('content')

<div class="formulario">
    <h2>Editar Forma de Pagamento</h2>
<form action="/forma/{{$forma->id}}" method="post">
    @csrf 
    @method('put')
    <div class="mb-3">
        <label for="description" class="form-label">*Descrição</label>
        <input type="text" name="description" value="{{$forma->description ?? ''}}" class="form-control" id="description" required>
    </div>

    <div class="mb-3">
        <label for="taxa" class="form-label">*Percentual taxa</label>
        <input type="text" name="taxa" value="{{$forma->taxa ?? ''}}" class="form-control" placeholder="somente números" id="taxa" required>
    </div>




    <input type="submit" class="btn btn-success btn-sm" value="Salvar">
</form>
</div>

@endsection