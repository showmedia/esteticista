@extends('layouts.main')

@section('content')

<div class="formulario">
    <h2>Alterar Senha</h2>
<form action="/user/password/" method="post">
    @csrf 
    @method('put')

    <div class="mb-3">
        <label for="password_atual" class="form-label">Senha Atual</label>
        <input type="password" class="form-control" name="password_atual" id="password_atual" required>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Senha Nova</label>
        <input type="password" class="form-control" name="password" id="password" required>
    </div>

    <div class="mb-3">
        <label for="confirm_password" class="form-label">Confirme a Senha Nova</label>
        <input type="password" class="form-control" name="confirm_password" id="confirm_password" required>
    </div>
    <input type="submit" id="cadastrar" disabled class="btn btn-primary btn-sm" value="Alterar">
</form>
</div>

@endsection