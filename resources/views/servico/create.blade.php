@extends('layouts.main')

@section('title', 'cadastrar Forma Pagamento - Gileade Despachante')

@section('content')

<div class="formulario">
    <h2>Cadastrar Serviço</h2>
<form action="/servico" method="post">
    @csrf 
    <div class="mb-3">
        <label for="description" class="form-label">*Descrição</label>
        <input type="text" name="description" class="form-control" id="description" required>
    </div>

    <div class="mb-3">
        <label for="valor" class="form-label">*Valor</label>
        <input type="text" name="valor" class="form-control" placeholder="Valor do Serviço" id="valor" required>
    </div>

    <div class="mb-3">
        <label for="tempo" class="form-label">*Tempo Estimado <small>(Em minutos)</small></label>
        <input type="text" name="tempo" class="form-control" placeholder="Somente números" id="tempo" required>
    </div>




    <input type="submit" class="btn btn-primary btn-sm" value="Cadastrar">
</form>
</div>

@endsection