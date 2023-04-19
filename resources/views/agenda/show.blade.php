@extends('.cliente.show')

@section('conteudo')
    <div class="formulario">
        @if($agenda->cliente)
        <div style="width:87%" class="text-center">
        <a href="/cliente/{{$agenda->cliente->id ?? ''}}">
            <h5 class="text-center" style="font-size:20px;"> {{$agenda->cliente->name ?? ''}} <br> <small style="font-size: 15px; color: #aaa;">{{date('d/m/Y', strtotime($agenda->inicio))}}</small>  </h5>
        </a>
        </div>
        @else
            <div class="text-center">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addcliente">Adicionar Cliente</button>
            </div>
        @endif
        <br><br><br>
        <div style="width: 80%; margin: 15px auto;">
            <div class="col-12 row text-center">
                <div class="col bg-light bg-gradient border border-secondary-subtle m-1 p-3 rounded"><strong>Serviço</strong> <br> {{$agenda->servico->description ?? ''}} </div>
                <div class="col bg-light bg-gradient border border-secondary-subtle m-1 p-3 rounded"><strong>Dia</strong>  <br> {{date('d/m/Y', strtotime($agenda->inicio))}} </div>
                <div class="col bg-light bg-gradient border border-secondary-subtle m-1 p-3 rounded"><strong>Hora Inicio</strong> <br> {{date('H:i', strtotime($agenda->inicio))}} </div>
                <div class="col bg-light bg-gradient border border-secondary-subtle m-1 p-3 rounded"><strong>Hora Final</strong> <br> {{date('H:i', strtotime($agenda->fim))}} </div>
            </div>
        </div>
          <form id="executar" action="/agenda/{{$agenda->id}}" method="post">
                @csrf 
            </form>
            <form id="cancelaragenda" action="/cancelaragenda/{{$agenda->id}}">
                @csrf
            </form>
        <div class="text-center" style="width: 84%; margin: 0 auto;">
          
            @if($agenda->status)
                <button class="btn btn-outline-danger" onclick="this.disabled='true';this.innerHTML='Cancelando..';$('#cancelaragenda').submit();")>Cancelar Agenda</button>
            @endif
            @if(!$agenda->compra && $itemcompras && count($itemcompras) > 0)
                <button class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#vincular">Vincular a uma Compra</button>
            @elseif($agenda->compra && $agenda->status == 1)
                <button onclick="$('#executar').submit();" class="btn btn-outline-primary">Executado</button>
            @endif
        </div>
        <br>
        
        <br>
        <div class="col-12">
            <h5 class="text-center">Outras Agendas desse cliente</h5>
            <table class="table table-hover">
                @if($agenda->cliente)
                @foreach($agenda->cliente->agendas as $agenda)
                    <tr>
                        <td> {{date('d/m/Y', strtotime($agenda->inicio))}} </td>
                        <td> {{$agenda->servico->description}} </td>
                        <td> {{date('H:i', strtotime($agenda->inicio))}} </td>
                        <td> {{date('H:i', strtotime($agenda->fim))}} </td>
                        <td> <a class="btn btn-sm btn-warning" href="/agenda/{{$agenda->id}}"><ion-icon name='open'></ion-icon></a> </td>
                    </tr>
                @endforeach
                @endif
            </table>
        </div>
        
    </div>
    
@endsection

