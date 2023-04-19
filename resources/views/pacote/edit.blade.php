@extends('layouts.main')

@section('title', 'cadastrar Forma Pagamento - Gileade Despachante')

@section('content')

<div class="formulario">
    <div style="width:70%; margin: 0 auto;">
    <h2>Editar Pacote</h2>
<form action="/pacote/{{$pacote->id}}" method="post">
    @csrf 
    @method('put')
    <div class="mb-3">
        <label for="description" class="form-label">*Descrição</label>
        <input type="text" name="description" value="{{$pacote->description ?? ''}}" placeholder="Descrição do pacote" class="form-control" id="description" required>
    </div>

    <div class="mb-3">
        <label for="valor" class="form-label">*Valor</label>
        <input type="text" name="valor" class="form-control" value="{{number_format($pacote->valor ?? 0,2,',','.')}}" placeholder="Valor do Serviço" id="valor" required>
    </div>

    <div class="mb-3">
        <label for="validade" class="form-label">*Validade <small>(Meses)</small></label>
        <input type="text" value="{{$pacote->validade ?? ''}}"  name="validade" class="form-control" placeholder="Somente números" id="validade" required>
    </div>




    <input type="submit" class="btn btn-success btn-sm" value="Salvar">
</form>
    </div>
</div>

@endsection