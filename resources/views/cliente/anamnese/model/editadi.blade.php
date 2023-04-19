@if(isset($cliente->anamnese))
@foreach($cliente->anamnese->adipometrias as $adi)
<!-- Modal -->
<div class="modal fade modal-lg" id="editadi{{$adi->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Adpometria</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="" action="/anamnese/adipometria/{{$adi->id}}" method="post">
                    @csrf 
                    @method('put')
      <div class="modal-body" style="width: 80%; margin:0 auto;">
      <h6>Digite a prega em cm</h6>
             <div class="row g-3">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="regiao">Regiao</span>
                            <input type="text" class="form-control" placeholder="Região" name="regiao" value="{{$adi->regiao ?? ''}}" aria-label="regiao" aria-describedby="regiao">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="bracoe">Prega em cm</span>
                            <input type="text" class="form-control" placeholder="Prega" name="prega" value="{{$adi->prega ?? ''}}" aria-label="prega" aria-describedby="prega">
                        </div>
                    </div>

             </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary"><ion-icon name="save-outline"></ion-icon> Salvar</button>
        
      </div>
      </form>
    </div>
  </div>
</div>
@endforeach
@endif