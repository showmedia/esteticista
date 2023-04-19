@extends('layouts.main')

@section('title', 'cadastrar Forma Pagamento - Gileade Despachante')

@section('content')

<div class="formulario">
    <h2>Editar Serviço</h2>
<form action="/servico/{{$servico->id}}" method="post">
    @csrf 
    @method('put')
    <div class="mb-3">
        <label for="description" class="form-label">*Descrição</label>
        <input type="text" name="description" value="{{$servico->description ?? ''}}" class="form-control" id="description" required>
    </div>

    <div class="mb-3">
        <label for="valor" class="form-label">*Valor</label>
        <input type="text" name="valor" class="form-control" value="{{number_format($servico->valor ?? 0, 2,',','.')}}" placeholder="Valor do Serviço" id="valor" required>
    </div>

    <div class="mb-3">
        <label for="tempo" class="form-label">*Tempo Estimado <small>(Em minutos)</small></label>
        <input type="text" name="tempo" class="form-control" value="{{$servico->tempo ?? ''}}" placeholder="Somente números" id="tempo" required>
    </div>




    <input type="submit" class="btn btn-success btn-sm" value="Salvar">
</form>
</div>

@endsection