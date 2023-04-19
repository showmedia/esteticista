<!-- Modal -->
<div class="modal fade modal-lg" id="modalperimetrias" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar nova Perimetria</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="" action="/anamnese/perimetria/{{$cliente->id}}" method="post">
                    @csrf 
      <div class="modal-body" style="width: 80%; margin:0 auto;">
      <h6>Digite as medidas em centimetros</h6>
             <div class="row g-3">
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="bracod">Braço D</span>
                            <input type="text" class="form-control" placeholder="Braço Direito" name="bracod" aria-label="Bracodireito" aria-describedby="bracod">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="bracoe">Braço E</span>
                            <input type="text" class="form-control" placeholder="Braço Esquerdo" name="bracoe" aria-label="Bracoesquerdo" aria-describedby="bracoe">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="abdinf">Abd Inf</span>
                            <input type="text" class="form-control" placeholder="Abdômem Inferior" name="abdinf" aria-label="abdinf" aria-describedby="abdinf">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="abdSup">Abd Sup</span>
                            <input type="text" class="form-control" placeholder="Abdômem Superior" name="abdsup" aria-label="abdsup" aria-describedby="abdsup">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="cintura">Cintura</span>
                            <input type="text" class="form-control" placeholder="Cintura" name="cintura" aria-label="Cintura" aria-describedby="cintura">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="quadril">Quadril</span>
                            <input type="text" class="form-control" placeholder="Quadril" name="quadril" aria-label="Quadril" aria-describedby="quadril">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="coxasupdireita">Coxa Sup. D</span>
                            <input type="text" class="form-control" placeholder="Coxa Sup direita" name="coxasupdireita" aria-label="CoxaSupDireita" aria-describedby="coxasupdireita">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="coxasupesqurda">Coxa Sup. E</span>
                            <input type="text" class="form-control" placeholder="Coxa Sup esquerda" name="coxasupesquerda" aria-label="CoxaSupEsquerda" aria-describedby="coxasupesquerda">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="coxainfesqurda">Coxa Inf. E</span>
                            <input type="text" class="form-control" placeholder="Coxa Inf esquerda" name="coxainfesquerda" aria-label="CoxaInfEsquerda" aria-describedby="coxainfesquerda">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="coxainfdireita">Coxa Inf. D</span>
                            <input type="text" class="form-control" placeholder="Coxa Inf direita" name="coxainfdireita" aria-label="CoxaInfDireita" aria-describedby="coxainfdireita">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="joelhodireito">Joelho D</span>
                            <input type="text" class="form-control" placeholder="Joelho Direito" name="joelhodireito" aria-label="JoeilhoDireito" aria-describedby="joelhodireito">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="joelhoesquerdo">Joelho E</span>
                            <input type="text" class="form-control" placeholder="Joelho Esquerdo" name="joelhoesquerdo" aria-label="JoelhoEsquerdo" aria-describedby="joelhoesquerdo">
                        </div>
                    </div>
             </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Adicionar</button>
        
      </div>
      </form>
    </div>
  </div>
</div>