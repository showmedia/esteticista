@extends('.layouts.main')

@section('content')
<div class="formulario">
    <h2>Editar Cadastro</h2>
<form action="/user" method="post">
    @csrf 
    @method("put")
    <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control" name="name" id="name" required value="{{$user->name}}">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" required value="{{$user->email}}">
    </div>

    <div class="mb-3">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="text" class="form-control" name="telefone" id="telefone" required value="{{$user->telefone}}">
    </div>
    <a href="/user/password" class="btn btn-sm btn-secondary">Alterar Senha</a>
    <input type="submit" class="btn btn-primary btn-sm" value="Salvar">
    
</form>
</div>

@endsection