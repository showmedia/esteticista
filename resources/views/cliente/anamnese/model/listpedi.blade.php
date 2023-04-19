<div class="modal fade modal-xl" id="listpedi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Todas Perimetrias</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body" style="width: 100%; margin:0 auto;">
      
      <div style="width: 100%;">
            <h5 style="color:#C39D5E; text-align:center; font-size: 15px;"> PERIMETRIA </h5>
            
            <table class="table table-hover table-success table-striped" style="font-size: 12px;">
                <thead>
                    <tr>
                        <th scope="1">Data</th>
                        <th scope="1">Braço D</th>
                        <th scope="1">Braço E</th>
                        <th scope="1">Abd Sup.</th>
                        <th scope="1">Abd Inf.</th>
                        <th scope="1">Cintura</th>
                        <th scope="1">Quadril</th>
                        <th scope="1">Coxa Sup D</th>
                        <th scope="1">Coxa Sup E</th>
                        <th scope="1">Coxa Inf D</th>
                        <th scope="1">Coxa Inf E</th>
                        <th scope="1">Joelho E</th>
                        <th scope="1">Joelho D</th>
                        <th scope="1">  </th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($cliente->anamnese))
                        @foreach($cliente->anamnese->perimetrias->reverse() as $peri)
                            <tr>
                                <td> {{date('d/m/y', strtotime($peri->created_at)) ?? ''}} </td>
                                <td> {{$peri->bracod.' cm' ?? ''}} </td>
                                <td> {{$peri->bracoe.' cm' ?? ''}} </td>
                                <td> {{$peri->abdsup.' cm' ?? ''}} </td>
                                <td> {{$peri->abdinf.' cm' ?? ''}} </td>
                                <td> {{$peri->cintura.' cm' ?? ''}} </td>
                                <td> {{$peri->quadril.' cm' ?? ''}} </td>
                                <td> {{$peri->coxasupd.' cm' ?? ''}} </td>
                                <td> {{$peri->coxasupe.' cm' ?? ''}} </td>
                                <td> {{$peri->coxainfd.' cm' ?? ''}} </td>
                                <td> {{$peri->coxainfe.' cm' ?? ''}} </td>
                                <td> {{$peri->joelhoe.' cm' ?? ''}} </td>
                                <td> {{$peri->joelhod.' cm' ?? ''}} </td>
                                <td> <button class="btn btn-sm btn-outline-secondary" style="padding: 0px 5px;" data-bs-toggle="modal" data-bs-target="#editpedi{{$peri->id}}">Editar</button> </td>
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