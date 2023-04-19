<!-- Modal -->
<div class="modal fade" id="addservico" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar Serviço</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/compra/servico/{{$compra->id ?? 0}}?cliente_id={{$cliente->id}}" method="post">
        @csrf
      <div class="modal-body">
      <div class="mb-3" style="width: 80%; margin: 0 auto;">
        <label for="servico" class="form-label">Escolha o Serviço</label>
        <div class="d-flex">
        <input type="number" style="width: 30%;" name="quantidade" id="quantidade" value="1" class="form-control">

<select class="form-select" name="servico" id="servico" aria-label="servico">
@foreach($servicos as $servico)
    <option value="{{$servico->id}}">{{$servico->description}} - R$ {{number_format($servico->valor,2,',','.')}}</option>
@endforeach
</select>
        </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button onclick="this.innerHTML='Adicionando..'; this.disabled = 'true'; this.form.submit(); " class="btn btn-primary">Adicionar</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addpacote" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar Pacote</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/compra/pacote/{{$compra->id ?? ''}}?cliente_id={{$cliente->id}}" method="post">
        @csrf
      <div class="modal-body">
      <div class="mb-3" style="width: 80%; margin: 0 auto;">
      <label for="pacote" class="form-label">Escolha o Pacote</label>
        <div class="d-flex">
            <input type="number" style="width: 30%;" name="quantidade" id="qtn" value="1" class="form-control">
            <select class="form-select" name="pacote" id="pacote" aria-label="pacote">
        @foreach($pacotes as $pacote)
            <option value="{{$pacote->id}}">{{$pacote->description}}</option>
        @endforeach
        </select>
        </div>
        
        
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button onclick="this.disabled='true'; this.innerHTML='Adicionando..'; this->form.submit();" class="btn btn-primary">Adicionar</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addpagamento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar Pagamento</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/compra/pagamento/{{$compra->id ?? ''}}" method="post">
        @csrf
      <div class="modal-body">
       
        <div class="mb-3 text-center" style="width: 80%; margin: 0 auto;">
                <label for="pagamento" class="form-label">Pagamento</label>
                <div class="d-flex">
                    <select class="form-select"  name="forma" id="forma" aria-label="forma">
                    @foreach($formas as $forma)
                        <option value="{{$forma->id}}">{{$forma->description}} - tx ({{$forma->taxa}}%)</option>
                        @php 
                            if($forma->description == 'Cartão de Crédito'){
                                $tx = $forma->taxa;
                                $idforma = $forma->id;
                            }
                        @endphp
                    @endforeach
                    </select>
                    <input type="hidden" id="idforma" value="{{$idforma}}">
               
               @if($compra)
                    <input type="text"  name="valor" id="pagamento" value="{{$compra->valor - $compra->pago}}" class="form-control">
                @endif
                </div>
        </div>
        <div class="mb-3" style="width: 80%; margin:0 auto; display:none;" id="parce">
            <div class="d-flex">
                <select class="form-select" name="parcelas" id="parcelas" aria-label="parcelas">
                    <option value="2" id="2x">2 x</option>
                    <option value="3" id="3x">3 x</option>
                    <option value="4" id="4x">4 x</option>
                    <option value="5" id="5x">5 x</option>
                    <option value="6" id="6x">6 x</option>
                </select>
                    <input type="text"  name="taxa" id="taxa" value="{{$tx}}" class="form-control">
               
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button onclick="this.disabled='true'; this.innerHTML='Adicionando..'; this.form.submit();" class="btn btn-primary">Adicionar</button>
      </div>
      </form>
    </div>
  </div>
</div>