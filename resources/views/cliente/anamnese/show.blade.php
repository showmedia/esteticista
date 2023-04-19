@extends('.cliente.show')



@section('conteudo')



@if(!$cliente->anamnese->edema)

    <a href="/anamnese/preencher/{{$cliente->id}}" class="btn btn-primary"><ion-icon name="reader-outline"></ion-icon> Preencher Ficha Anamnese Corporal</a>

@else 



<div class="container">

    <div class="row">

        <div class="col-md-4 text-small" style="border-right:1px solid #C39D5E">

            <div>

            <h6>HIDROLIPODISTROFIA GINÓDE(HLDG)</h6>

            <b>Tipo: </b> <strong>{{$cliente->anamnese->hidroli->tipo ?? 'Não definido'}} - </strong> <b>Grau:</b> <strong> {{$cliente->anamnese->hidroli->grau ?? 'Não definido'}}</strong>

            </div>

            <br>

            <div>

                <h6>EDEMA</h6>

                <b>Teste do cacifo: </b><strong> {{$cliente->anamnese->edema->cacifo ? 'POSITIVO' : 'NEGATIVO'}} </strong> <br>

                <b>Teste de digito pressão: </b> <strong>{{$cliente->anamnese->edema->pressao ? 'POSITIVO' : 'NEGATIVO'}} </strong><br>

                <b>Sensação de Peso | Cansaço: </b> <strong> {{{$cliente->anamnese->edema->sensacao ?? 'Não definido'}}}</strong>

            </div>

            <br>

            <div>

                <h6>LIPODISTROFIA</h6>

                <b>Gordura: </b> <strong> {{$cliente->anamnese->lipodistrofia->gordura ?? 'NÃO DEFINIDO'}} </strong> <br>

                <b>Distribuição de Gordura: </b> <strong>{{$cliente->anamnese->lipodistrofia->distribuicao ?? 'NÃO DEFINIDO'}}</strong> <br>

                <b>Localização: </b> <strong> {{$cliente->anamnese->lipodistrofia->localizacao ?? 'NÃO DEFINIDO'}} </strong> <br>

                <b>Biotipo: </b> <strong> {{$cliente->anamnese->lipodistrofia->biotipo ?? 'NÃO DEFINIDO'}} </strong> <br>

                <b>Peso: </b> <strong> {{$cliente->anamnese->lipodistrofia->peso ?? '' . ' kls | '}} </strong>

                <b>Altura: </b> <strong> {{$cliente->anamnese->lipodistrofia->altura ?? '' . ' kls | '}} </strong>

                <b>Peso Ideal: </b> <strong> {{$cliente->anamnese->lipodistrofia->ideal ?? '' . ' kls'}} </strong>

            </div>

            <br>

            <div>

                <h6>FLACIDEZ</h6>

                <b> {{$cliente->anamnese->flacidez->tissular ?? '' ? 'Tissular: '. $cliente->anamnese->flacidez->ltissular : '' }} </b> <br>

                <b> {{$cliente->anamnese->flacidez->muscular ?? '' ? 'Muscular: '. $cliente->anamnese->flacidez->lmuscular : ''}} </b>

            </div>



            <div style="margin-top: 10px;">

                <button class="btn btn-sm btn-primary anotation" data-bs-toggle="modal" data-bs-target="#listnotes"><ion-icon name="pencil-outline"></ion-icon> Anotações <span class="number">{{count($cliente->anamnese->notes)}}</span></button>

                <a href="/anamnese/edit/{{$cliente->id}}" style="margin-left:10px;" class="btn btn-sm btn-success">Editar Ficha</a>

            </div>



        </div>

        

        <div class="col-md-8">



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

                        <th scope="1"> <button class="btn btn-sm btn-outline-primary" style="padding: 0px 5px;" data-bs-toggle="modal" data-bs-target="#modalperimetrias"> Novo </button>

                                       @if($cliente->anamnese->perimetrias && count($cliente->anamnese->perimetrias) > 0) <button data-bs-toggle="modal" data-bs-target="#listpedi" class="btn btn-sm btn-outline-success" style="padding: 0px 5px"> Ver Tudo</button>  @endif          

                        </th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($cliente->anamnese->perimetrias->slice(-2) as $peri)

                        <tr>

                            <td> {{date('d/m/y', strtotime($peri->created_at)) ?? ''}} </td>

                            <td> {{$peri->bracod.' cm' ?? ''}} </td>

                            <td> {{$peri->bracoe.' cm' ?? ''}} </td>

                            <td> {{$peri->abdsup.' cm' ?? ''}} </td>

                            <td> {{$peri->abdinf.' cm' ?? ''}} </td>

                            <td> <button class="btn btn-sm btn-outline-secondary" style="padding: 0px 5px;" data-bs-toggle="modal" data-bs-target="#editpedi{{$peri->id}}">Editar</button> </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

            </div>

            <br>

            <div style="width: 100%;">

                <h5 style="color:#C39D5E; text-align:center; font-size: 15px;"> ADIPOMETRIA </h5>

                <table class="table table-hover table-success table-striped" style="font-size: 12px;">

                <thead>

                    <tr>

                        <th scope="1">Data</th>

                        <th scope="1">Região</th>

                        <th scope="1">Prega em cm</th>

                        <th scope="1"> <button class="btn btn-sm btn-outline-primary" style="padding: 0px 5px;" data-bs-toggle="modal" data-bs-target="#modaladipometria"> Novo </button>

                                       @if($cliente->anamnese->adipometrias && count($cliente->anamnese->adipometrias) > 0) <button class="btn btn-sm btn-outline-success" style="padding: 0px 5px" data-bs-toggle="modal" data-bs-target="#listadi"> Ver Tudo</button>  @endif          

                        </th>

                    </tr>

                </thead>

                <tbody>

                    @foreach($cliente->anamnese->adipometrias->slice(-2) as $adi)

                        <tr>

                            <td> {{date('d/m/y', strtotime($adi->created_at)) ?? ''}} </td>

                            <td> {{$adi->regiao ?? ''}} </td>

                            <td> {{$adi->prega.' cm' ?? ''}} </td>

                            <td> <button class="btn btn-sm btn-outline-secondary" style="padding: 0px 5px;"data-bs-toggle="modal" data-bs-target="#editadi{{$adi->id}}">Editar</button> </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

            

            </div>





        </div>

    </div>

</div>



@endif



@endsection