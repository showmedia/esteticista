@extends('.cliente.show')

@section('conteudo')

<div class="row col-12 text-center p-2">
<div class="col-md-8">
    <h6>Compras</h6>
    <div class="col-12 p-2">
        <table class="table table-hover">
            <tr>
                <th>Data</th>
                <th>Serviços/Pacotes</th>
                <th>Valor</th>
                <th>Valor Pago</th>
                <th style="font-size: 22px;"> <a href="/compra/0?cliente_id={{$cliente->id}}"><ion-icon name="add-circle"></ion-icon></a> </th>
            </tr>
            @foreach($cliente->compras->reverse() as $compra)
                @if($compra->status)
                <tr>
                @else 
                <tr class="bg-secondary subtle">
                @endif
                    <td> {{date('d/m/Y', strtotime($compra->created_at))}} </td>
                    <td> {{count($compra->items)}} </td>
                    <td> R$ {{number_format($compra->valor,2,',','.')}} </td>
                    <td> R$ {{number_format($compra->pago,2,',','.')}} </td>
                    <td> <a href="/compra/{{$compra->id}}" class="btn btn-sm btn-outline-success"> <ion-icon name="open"></ion-icon> </a> </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
<div class="col-md-4 p-2">
    <h6>Agendas</h6>
    <div class="col-12">
        <table class="table table-hover">
  
            <tr>
                <th>Data/Hora</th>
                <th>Serviço</th>
                <th style="font-size: 22px;"> <a href="/"><ion-icon name="add-circle"></ion-icon></a> </th>
            </tr>
            @foreach($cliente->agendas->reverse() as $agenda)
                
                @if($agenda->status == 1 && strtotime($agenda->inicio) < time())
                <tr class="bg-danger-subtle">
                @elseif($agenda->status)
                <tr>
                @else 
                <tr class="bg-secondary subtle">
                @endif
                    <td> {{date('d/m/Y H:i', strtotime($agenda->inicio))}} </td>
                    <td> {{$agenda->servico->description}} </td>
                    <td> <a href="/agenda/{{$agenda->id}}" class="btn btn-sm btn-outline-warning"> <ion-icon name="open"></ion-icon> </a> </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
</div>


@endsection