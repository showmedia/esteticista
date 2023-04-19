<div class="modal fade" id="excluirpgto{{$pgto->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir Pagamento</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/compra/2/{{$pgto->id}}" method="post">
        @csrf
        @method('delete')
      <div class="modal-body">
        <h5>Tem certeza que deseja Excluir este pagamento (R$ {{number_format($pgto->valor,2,',','.')}})?</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button onclick="this.disabled='true'; this.innerHTML='Excluindo..'; this->form.submit();" class="btn btn-danger">Excluir</button>
      </div>
      </form>
    </div>
  </div>
</div>