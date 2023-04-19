<div class="modal fade modal-lg" id="listadi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Todas Adipometrias</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body" style="width: 100%; margin:0 auto;">
      
      <div style="width: 100%;">
            <h5 style="color:#C39D5E; text-align:center; font-size: 15px;"> ADIPOMETRIA </h5>
            
            <table class="table table-hover table-success table-striped" style="font-size: 12px;">
                <thead>
                    <tr>
                        <th scope="1">Data</th>
                        <th scope="1">Região</th>
                        <th scope="1">Prega</th>
                        <th scope="1">  </th>
                    </tr>
                </thead>
                <tbody>
                    @if($cliente->anamnese)
                    @foreach($cliente->anamnese->adipometrias->reverse() as $adi)
                        <tr>
                            <td> {{date('d/m/y', strtotime($adi->created_at)) ?? ''}} </td>
                            <td> {{$adi->regiao ?? ''}} </td>
                            <td> {{$adi->prega.' cm' ?? ''}} </td>
                            <td> <button class="btn btn-sm btn-outline-secondary" style="padding: 0px 5px;" data-bs-toggle="modal" data-bs-target="#editadi{{$adi->id}}">Editar</button> </td>
                        </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
            </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        
      </div>
  
    </div>
  </div>
</div>