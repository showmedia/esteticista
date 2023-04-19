@extends('layouts.main')

@section('title', 'cadastrar cliente - Gileade Despachante')

@section('content')

<div class="formulario">
    <h2>Alterar Dados</h2>
<form action="/cliente/edit/{{$cliente->id}}" method="post">
    @csrf 
    @method('put')
    <div class="mb-3">
        <label for="name" class="form-label">*Nome</label>
        <input type="text" name="name" class="form-control" value="{{$cliente->name ?? ''}}" id="name" required>
    </div>

    <div class="mb-3">
        <label for="telefone" class="form-label">Whatsapp</label>
        <input type="text" name="telefone" class="form-control" id="telefone" value="{{$cliente->telefone ?? ''}}">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="{{$cliente->email ?? ''}}" id="email">
    </div>

    <div class="mb-3">
        <label for="cpf" class="form-label">CPF/CNPJ</label>
        <input type="text" name="cpf" class="form-control" id="cpf" value="{{$cliente->cpf ?? ''}}">
    </div>

    <div class="mb-3">
        <label for="rg" class="form-label">RG</label>
        <input type="text" name="rg" class="form-control" value="{{$cliente->rg ?? ''}}" id="rg">
    </div>



    <input type="submit" class="btn btn-primary btn-sm" value="Cadastrar">
</form>
</div>

@endsection