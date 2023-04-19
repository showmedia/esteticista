@extends('.cliente.show')

@section('conteudo')
@if(!$cliente->facial->flacidez)
    <a href="/facial/preencher/{{$cliente->id}}" class="btn btn-primary"><ion-icon name="reader-outline"></ion-icon> Preencher Ficha Anamnese Facial</a>
@else
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-small" style="border-right:1px solid #C39D5E">
                <div class="row">
                    <h6 class="text-center">Ficha Anamnese Facial</h6>
                    <br> <br>
                    <div class="col-md-6" style="line-height: 1.4;">
                        
                       <b>Biotipo Cutaneo:</b> {{$cliente->facial->biotipo ?? ''}} <br>
                       <b>Estado Cutaneo:</b> {{$cliente->facial->estado ?? ''}} <br>
                       <b>Textura:</b> {{$cliente->facial->textura ?? ''}} <br>
                       <b>Espessura:</b> {{$cliente->facial->espessura ?? ''}} <br>
                       <b>Ostio:</b> {{$cliente->facial->ostio ?? ''}} <br>
                       <b>Acne:</b> {{$cliente->facial->acne ?? ''}} <br>
                        <b>Cor de Pele: </b> {{$cliente->facial->cor ?? ''}} <br>
                        <b>Involução Cutanea: </b> @foreach($cliente->facial->involucao ?? [] as $involucao) {{$involucao ?? ''}} - @endforeach <br>
                        <b>Local: </b> {{$cliente->facial->local ?? ''}} <br>
                        <b>Fototipo Cutaneo Fitzpatrick</b> {{$cliente->facial->fototipo ?? ''}} <br>
                        <b>Fotoenvelhecimento Escala de Glocau</b> {{$cliente->facial->fotoenvelhecimento ?? ''}} <br>
                        <b>Observação: </b> {{$obsfotoenv ?? ''}} <br>
                        <b>Manchas Pigmentares (Melanina): </b> @foreach($cliente->facial->manchas ?? [] as $manchas) {{$manchas}} - @endforeach
                    </div>
                    <div class="col-md-6" style="line-height: 1.4;">
                        <b>Alterações Vaculares: </b> @foreach($cliente->facial->alteracoes ?? [] as $vasc) {{$vasc ?? ''}} @endforeach <br>
                        <b>Lesões de Pele: </b> @foreach($cliente->facial->lesoes ?? [] as $les) {{$les ?? ''}} - @endforeach <br>
                        <b>Cicatriz: </b> @foreach($cliente->facial->cicatriz ?? [] as $cica) {{$cica ?? ''}} - @endforeach <br>
                        <b>Pelos: </b> @foreach($cliente->facial->pelos ?? [] as $pelo) {{$pelo ?? ''}} - @endforeach <br>
                        <b>Olheiras:</b> {{$cliente->facial->olheiras ? 'Sim' : 'Não'}} - {{$cliente->facial->tipoolheira ?? ''}} <br>
                        <br>
                        <div>
                            <h6>FLACIDEZ</h6>
                            <b> {{$cliente->facial->flacidez->tissular ? 'Tissular: '. $cliente->facial->flacidez->ltissular : '' }} </b> <br>
                            <b> {{$cliente->facial->flacidez->muscular ? 'Muscular: '. $cliente->facial->flacidez->lmuscular : ''}} </b>
                        </div>
                    </div>

                </div>
                <div style="margin-top: 10px; text-align:center;">
                    <button class="btn btn-sm btn-primary anotation" data-bs-toggle="modal" data-bs-target="#listnotes"><ion-icon name="pencil-outline"></ion-icon> Anotações <span class="number">{{count($cliente->facial->notes)}}</span></button>
                    <a href="/facial/edit/{{$cliente->id}}" style="margin-left:10px;" class="btn btn-sm btn-success">Editar Ficha</a>
                </div>
            </div>
            <div class="col-md-4">
                <div style="width: 100%;">
                    <h6>Objetivos</h6>
                    <p> {{$cliente->facial->objetivo ?? ''}} </p>
                    <br><br>
                    <h6>Tratamento Proposto: </h6>
                    <p> {{$cliente->facial->tratamento ?? ''}} </p>
                </div>
            </div>
        </div>
    </div>
@endif


@endsection