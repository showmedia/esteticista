@extends('.layouts.main')

@section('content')
    
    <div class="formulario">
        <h5 class="text-center"> {{$pacote->description ?? ''}} </h5>
        <div>
            <a href="/pacote/edit/{{$pacote->id}}"><span class="bg-secondary-subtle" style="margin: 5px auto; display: block; text-align:center; width: 20%; padding: 10px; border-radius: 3px;"> <b>Valor</b> R$ {{number_format($pacote->valor,2,',','.')}} <br>
                                        <b>Validade</b> {{$pacote->validade}} MESES </span></a>
        </div>

        <div style="width: 50%; margin: 10px auto">
            <button class="btn btn-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#adicionar" style="width: 100%;">Adicionar</button>
            <table class="table table-hover">
                <tr>
                    <th>Serviço</th>
                    <th>Quantidade</th>
                    <th></th>
                </tr>
                @foreach($pacote->items as $item)
                    <tr>
                        <td> {{$item->servico->description ?? ''}} </td>
                        <td> {{$item->quantidade ?? ''}} </td>
                        <td> <form action="/pacote/item/{{$pacote->id}}/{{$item->id}}" method="post">@csrf @method('delete') <button class="btn btn-sm btn-danger"> <ion-icon name="trash-outline"></ion-icon> </button> </form> </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="adicionar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar Serviço</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="/pacote/add/{{$pacote->id}}" method="post">
        @csrf
      <div class="modal-body">
        <div class="mb-3">
            <label for="quantidade" class="form-label">*Quantidade</label>
            <input type="number" name="quantidade" value="1" placeholder="Quantidade" class="form-control" id="quantidade" required>
        </div>
        <div class="mb-3">
            <label for="servico" class="form-label">Serviço </label>
            <select class="form-select" name="servico" id="servico" size="3" required aria-label="size 3 select example">
                    @foreach($servicos->sortBy('description') as $servico)
                        <option value="{{$servico->id}}"> {{$servico->description}} </option>
                    @endforeach
            </select>
            </label>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button onclick="this.disabled='true'; this.innerHTML = 'Adicionando...'; this.form.submit();" class="btn btn-primary">Adicionar</button>
      </div>
      </form>
    </div>
  </div>
</div>

@endsection

