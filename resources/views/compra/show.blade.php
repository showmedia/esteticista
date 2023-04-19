@extends('.cliente.show')

@section('conteudo')

<div class="container" style="min-height: 50vh; margin-top:10px;">
    <h6 class="text-center" style="font-size: 18px;"> {{$cliente->name ?? ''}} </h6>
    <br>
    <div style="width: 100%; max-width: 500px; margin: 0 auto;">
    <div class="row d-flex col-12 text-center">
        <button class="btn btn-sm btn-secondary col m-2" data-bs-toggle="modal" data-bs-target="#addservico"> <ion-icon name="add"></ion-icon> Serviço </button>
        <button class="btn btn-sm btn-light border-secondary col m-2" data-bs-toggle="modal" data-bs-target="#addpacote"> <ion-icon name="add"></ion-icon> Pacote </button>
    @if($compra && ($compra->valor > $compra->pago))
        <button class="btn btn-sm btn-success col m-2" data-bs-toggle="modal" data-bs-target="#addpagamento"> <ion-icon name="add"></ion-icon> Pagamento </button>
    @endif
    </div>
    </div>
        @if($compra)
        <div style="width: 80%; margin: 15px auto;">
            <div class="col-12 row text-center">
                <div class="col bg-light bg-gradient border border-secondary-subtle m-1 p-3 rounded"><strong>Data</strong> <br> {{date('d/m/Y', strtotime($compra->created_at))}} </div>
                <div class="col bg-light bg-gradient border border-secondary-subtle m-1 p-3 rounded"><strong>Itens</strong> <br> {{count($compra->items)}} </div>
                <div class="col bg-light bg-gradient border border-secondary-subtle m-1 p-3 rounded"><strong>Valor Total</strong> <br> R$ {{number_format($compra->valor,2,',','.')}} </div>
                <div class="col bg-light bg-gradient border border-secondary-subtle m-1 p-3 rounded"><strong>Valor Pago</strong> <br> R$ {{number_format($compra->pago,2,',','.')}} </div>
            </div>
            <div class="col-12 row text-center" style="margin-top: 10px;">
                <div class="col-md-6">
                    <h6>ITENS</h6>
                    <div class="col-12">
                        <table class="table table-hover">
                            <tr>
                                <th>Descrição</th>
                                <th>Valor</th>
                                <th></th>
                            </tr>
                            @foreach($compra->items as $item)
                                <tr>
                                    <td>
                                        {{$item->quantidade}} - 
                                        {{$item->servico->description ?? ''}}
                                        {{$item->pacote->description ?? ''}}
                                    </td>
                                    <td> R$ {{number_format($item->valortotal,2,',','.')}} </td>
                                    <td> <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#excluiritem{{$item->id}}"> <ion-icon name="trash"></ion-icon> </button> </td>
                                </tr>

                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <h6>PAGAMENTOS</h6>
                    <div class="col-12">
                        <table class="table table-hover">
                            <tr>
                                <th>Forma</th>
                                <th>Valor</th>
                                <th></th>
                            </tr>
                            @foreach($compra->pagamentos as $pgto)
                                <tr>
                                    <td>
                                        {{$pgto->forma->description}} 
                                    </td>
                                    <td> R$ {{number_format($pgto->valor,2,',','.')}} </td>
                                    <td> <button data-bs-toggle="modal" data-bs-target="#excluirpgto{{$pgto->id}}" class="btn btn-danger btn-sm"> <ion-icon name="trash"></ion-icon> </button> </td>
                                </tr>
               
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endif
    
</div>


@section('modais')
@include('.compra.modais');

@if(isset($compra))

@foreach($compra->pagamentos as $pgto)
                 @include('compra.deletepag')
@endforeach

@foreach($compra->items as $item)
@include('compra.deleteitem')
@endforeach

@endif
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $('#forma').change(function(){
                var forma = $(this).val();
                
                if(forma == $("#idforma").val()){
                    $("#parce").fadeIn();
                    $("#2x").text('2 x '+(parseFloat($("#pagamento").val())/2).toLocaleString('pt-BR', {style: 'currency', currency: 'BRL'}));
                    $("#3x").text('3 x '+(parseFloat($("#pagamento").val())/3).toLocaleString('pt-BR', {style: 'currency', currency: 'BRL'}));
                    $("#4x").text('4 x '+(parseFloat($("#pagamento").val())/4).toLocaleString('pt-BR', {style: 'currency', currency: 'BRL'}));
                    $("#5x").text('5 x '+(parseFloat($("#pagamento").val())/5).toLocaleString('pt-BR', {style: 'currency', currency: 'BRL'}));
                    $("#6x").text('6 x '+(parseFloat($("#pagamento").val())/6).toLocaleString('pt-BR', {style: 'currency', currency: 'BRL'}));

                }else{
                    $("#parce").hide();
                }
            });
        });
    </script>
@endsection

@endsection