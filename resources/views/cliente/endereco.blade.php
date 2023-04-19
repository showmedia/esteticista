@extends('.cliente.show')

@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="formulario">
                    <form action="/endereco/{{$cliente->id}}" method="post">
                        @csrf 
                        <div class="row">
                        <div class="mb-3 col-md-4">
                            <label for="cep" class="form-label">Cep <small>(digite para buscar)</small></label>
                            <input type="text" name="cep" class="form-control form-control-sm" id="cep" value="{{$cliente->endereco->cep ?? ''}}">
                        </div>
                        </div>
                        <div class="row">
                        <div class="mb-3 col-md-10">
                            <label for="logradouro" class="form-label">Logradouro <small></small></label>
                            <input type="text" name="logradouro" class="form-control form-control-sm" id="logradouro" value="{{$cliente->endereco->logradouro ?? ''}}">
                        </div>
                        <div class="mb-3 col-md-2">
                            <label for="numero" class="form-label">Nº</label>
                            <input type="text" class="form-control form-control-sm" id="numero" name="numero" value="{{$cliente->endereco->numero ?? ''}}">
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="complemento" class="form-label">Complemento</label>
                                <input type="text" name="complemento" value="{{$cliente->endereco->complemento ?? ''}}" class="form-control form-control-sm" id="complemento">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 mb-3">
                            <label for="bairro" class="form-label">Bairro</label>
                            <input type="text" name="bairro" id="bairro" value="{{$cliente->endereco->bairro ?? ''}}" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 mb-3">
                                <label for="cidade" class="form-label">Cidade</label>
                                <input type="text" class="form-control form-control-sm" name="cidade" id="cidade" value="{{$cliente->endereco->cidade ?? ''}}">
                            </div>
                            <div class="col-md-2 mb-3">
                                <label for="estado" class="form-label">UF</label>
                                <input type="text" class="form-control form-control-sm" id="estado" name="estado" value="{{$cliente->endereco->estado ?? ''}}">
                            </div>
                        </div>
                        <div class="" style="width:100%; text-align:center;">
                        <button class="btn btn-primary" style="width: 40%;"><ion-icon name="save-outline"></ion-icon> Salvar Endereço</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection