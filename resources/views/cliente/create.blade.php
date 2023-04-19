@extends('layouts.main')



@section('title', 'cadastrar cliente - Gileade Despachante')



@section('content')



<div class="formulario">

    <h2>Cadastrar Cliente</h2>

<form action="/cliente" method="post">

    @csrf 

    <div class="mb-3">

        <label for="name" class="form-label">*Nome</label>

        <input type="text" name="name" class="form-control" id="name" required>

    </div>



    <div class="mb-3">

        <label for="telefone" class="form-label">Whatsapp</label>

        <input type="text" name="telefone" class="form-control" id="telefone">

    </div>



    <div class="mb-3">

        <label for="email" class="form-label">Email</label>

        <input type="email" name="email" class="form-control" id="email">

    </div>



    <div class="mb-3">

        <label for="cpf" class="form-label">CPF/CNPJ</label>

        <input type="text" name="cpf" class="form-control" id="cpf">

    </div>



    <div class="mb-3">

        <label for="rg" class="form-label">RG</label>

        <input type="text" name="rg" class="form-control" id="rg">

    </div>

    <div class="mb-3">

        <label for="datanascimento" class="form-label">Data Nascimento</label>

        <input type="date" name="datanascimento" class="form-control" id="datanascimento">

    </div>







    <input type="submit" class="btn btn-primary btn-sm" value="Cadastrar">

</form>

</div>



@endsection