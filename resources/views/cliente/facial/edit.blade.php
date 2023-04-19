@extends('.cliente.show')
@section('content')
    <div class="formulario">
        <h4>FICHA DE ANAMNESE FACIAL</h4>

        <form action="/facial/{{$cliente->facial->id}}" method="post">
            @csrf
            @method('put')
            <br>
            <h5>BIOTIPO CUTANEO</h5>
                <div class="inline">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="biotipo" value="Eudermica" id="eudermica" {{$cliente->facial->biotipo == 'Eudermica' ? 'checked' : ''}}>
                        <label class="form-check-label" for="eudermica">
                            Eudermica
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="biotipo" value="Lipidica" id="lipidica" {{$cliente->facial->biotipo == "Lipidica" ? 'checked' : ''}}>
                        <label class="form-check-label" for="lipidica">
                            Lipidica
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="biotipo" value="Alipica" id="alipica" {{$cliente->facial->biotipo == "Alipica" ? 'checked' : ''}}>
                        <label class="form-check-label" for="alipica">
                            Alipica
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="biotipo" value="Mista" id="mista" {{$cliente->facial->biotipo == 'Mista' ? 'checked' : ''}}>
                        <label class="form-check-label" for="mista">
                            Mista
                        </label>
                    </div>
                </div>
            <br>
            <h5>ESTADO CUTANEO</h5>
                <div class="inline">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="estado" value="Normal" id="normal" {{$cliente->facial->estado == 'Normal' ? 'checked' : ''}}>
                        <label class="form-check-label" for="normal">
                            Normal
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="estado" value="Desidratado" id="desidratado" {{$cliente->facial->estado == 'Desidratado' ? 'checked' : ''}}>
                        <label class="form-check-label" for="desidratado">
                            Desidratado
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="estado" value="Sensibilizado" id="sensibilizado" {{$cliente->facial->estado == 'Sensibilizado' ? 'checked' : ''}}>
                        <label class="form-check-label" for="sensibilizado">
                            Sensibilizado
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="estado" value="Acneico" id="acneico" {{$cliente->facial->estado == 'Acneico' ? 'checked' : ''}}>
                        <label class="form-check-label" for="acneico">
                            Acneico
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="estado" value="Seborreico" id="seborreico" {{$cliente->facial->estado == 'Seberreico' ? 'checked' : ''}}>
                        <label class="form-check-label" for="seborreico">
                            Seborreico
                        </label>
                    </div>  
                  
                </div>
            <br>
                <h5>TEXTURA</h5>
                    <div class="inline">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="textura" value="Lisa" id="lisa" {{$cliente->facial->textura == 'Lisa' ? 'checked' : ''}}>
                            <label class="form-check-label" for="lisa">
                                Lisa
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="textura" value="Aspera" id="aspera" {{$cliente->facial->textura == 'Aspera' ? 'checked' : ''}}>
                            <label class="form-check-label" for="aspera">
                                Aspera
                            </label>
                        </div>
                    </div>
            <br>
            <h5>ESPESSURA</h5>
                <div class="inline">
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="espessura" value="Fina" id="fina" {{$cliente->facial->espessura == 'Fina' ? 'checked' : ''}}>
                            <label class="form-check-label" for="fina">
                                Fina
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="espessura" value="Muito Fina" id="mfina" {{$cliente->facial->espessura == 'Muito Fina' ? 'checked' : ''}}>
                            <label class="form-check-label" for="mfina">
                                Muito Fina
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="espessura" value="Espessa" id="espessa" {{$cliente->facial->espessura == 'Espessa' ? 'checked' : ''}}>
                            <label class="form-check-label" for="espessa">
                                Espessa
                            </label>
                        </div> 
                </div>
            <br>
                <h5>OSTIO</h5>
                <div class="inline">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ostio" value="Dilatados na Zona T" id="zonat" {{$cliente->facial->ostio == 'Dilatados na Zona T' ? 'checked' : ''}}>
                            <label class="form-check-label" for="zonat">
                                Dilatados na Zona T
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ostio" value="Dilatados em Toda Face" id="todaface" {{$cliente->facial->ostio == 'Dilatados em Toda Face' ? 'checked' : ''}}>
                            <label class="form-check-label" for="todaface">
                                Dilatados em Toda Face
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="Contraido" name="ostio" id="contraidos" {{$cliente->facial->ostio == 'Contraido' ? 'checked' : ''}}>
                            <label class="form-check-label" for="contraidos">
                                Contraido
                            </label>
                        </div>
                </div>
            <br>
                <h5>ACNE</h5>
                <div class="INLINE">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="acne" value="Grau I" id="graui" {{$cliente->facial->acne == 'Grau I' ? 'checked' : ''}}>
                            <label class="form-check-label" for="graui">
                                Grau I
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="acne" value="Grau II" id="grauii" {{$cliente->facial->acne == 'Grau II' ? 'checked' : ''}}>
                            <label class="form-check-label" for="grauii">
                                Grau II
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="acne" value="Grau III" id="grauiii" {{$cliente->facial->acne == 'Grau III' ? 'checked' : ''}}>
                            <label class="form-check-label" for="grauiii">
                                Grau III
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="acne" value="Grau IV" id="grauiv" {{$cliente->facial->acne == 'Grau IV' ? 'checked' : ''}}>
                            <label class="form-check-label" for="grauiv">
                                Grau IV
                            </label>
                        </div>
                </div>
                <br>
                <h5>COR DE PELE</h5>
                    <div class="inline">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="cor" value="Branca" id="branca" {{$cliente->facial->cor == 'Branca' ? 'checked' : ''}}>
                            <label class="form-check-label" for="branca">
                                Branca
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="cor" value="Negra" id="negra" {{$cliente->facial->cor == 'Negra' ? 'checked' : ''}}>
                            <label class="form-check-label" for="negra">
                                Negra
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="cor" value="Amarela" id="amarela" {{$cliente->facial->cor == 'Amarela' ? 'checked' : ''}}>
                            <label class="form-check-label" for="amarela">
                                Amarela
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="cor" value="Parda" id="parda" {{$cliente->facial->cor == 'Parda' ? 'checked' : ''}}>
                            <label class="form-check-label" for="parda">
                                Parda
                            </label>
                        </div>
                    </div>
                <br>
                <h5>INVOLUÇÃO CUTANEA</h5>
                <div class="inline">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="involucao[]" value="Linhas" id="linhas" {{is_array($cliente->facial->involucao) && in_array("Linhas", $cliente->facial->involucao) ? 'checked' : '' }}>
                            <label class="form-check-label" for="linhas">
                                Linhas
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="involucao[]" value="Sulcos" id="sulcos" {{is_array($cliente->facial->involucao) && in_array("Sulcos", $cliente->facial->involucao) ? 'checked' : ''}}>
                            <label class="form-check-label" for="sulcos">
                                Sulcos
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="involucao[]" value="Rugas" id="rugas" {{is_array($cliente->facial->involucao) && in_array("Rugas", $cliente->facial->involucao) ? 'checked' : ''}}>
                            <label class="form-check-label" for="rugas">
                                Rugas
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="involucao[]" value="Elastose" id="elastose" {{is_array($cliente->facial->involucao) && in_array("Elastose", $cliente->facial->involucao) ? 'checked' : ''}}>
                            <label class="form-check-label" for="elastose">
                                Elastose
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="involucao[]" value="Ptose" id="ptose" {{is_array($cliente->facial->involucao) && in_array("Ptose", $cliente->facial->involucao) ? 'checked' : ''}}>
                            <label class="form-check-label" for="ptose">
                                Ptose
                            </label>
                        </div>
                </div>
                <br>
                <div class="mb-3 row">
                    <label for="localinvolucao" class="col-sm-4 col-form-label" style="text-align: right;"><b>Local:</b></label>
                    <div class="col-sm-6">
                        <input type="text" name="localinvolucao" class="form-control" id="localinvolucao" value="{{$cliente->facial->local ?? ''}}">
                    </div>
                </div>
            <br>
            <h5>FOTOTIPO CUTANEO FITZPATRICK</h5>
                <div class="inline">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="fototipo" value="Tipo I" id="tipoi" {{$cliente->facial->fototipo == 'Tipo I' ? 'checked' : ''}}>
                            <label class="form-check-label" for="tipoi">
                                Tipo I
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="fototipo" value="Tipo II" id="tipoii" {{$cliente->facial->fototipo == 'Tipo II' ? 'checked' : ''}}>
                            <label class="form-check-label" for="tipoii">
                                Tipo II
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="fototipo" value="Tipo III" id="tipoiii" {{$cliente->facial->fototipo == 'Tipo III' ? 'checked' : ''}}>
                            <label class="form-check-label" for="tipoiii">
                                Tipo III
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="fototipo" value="Tipo IV" id="tipoiv" {{$cliente->facial->fototipo == 'Tipo IV' ? 'checked' : ''}}>
                            <label class="form-check-label" for="tipoiv">
                                Tipo IV
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="fototipo" value="Tipo V" id="tipov" {{$cliente->facial->fototipo == 'Tipo V' ? 'checked' : ''}}>
                            <label class="form-check-label" for="tipov">
                                Tipo V
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="fototipo" value="Tipo VI" id="tipovi" {{$cliente->facial->fototipo == 'Tipo VI' ? 'checked' : ''}}>
                            <label class="form-check-label" for="tipovi">
                                Tipo VI
                            </label>
                        </div>
                </div>
            <br>
            <h5>FOTOENVELHECIMENTO ESCALA DE GLOGAU</h5>
                <div class="inline">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="fotoenvelhecimento" value="I" id="i" {{$cliente->facial->fotoenvelhecimento == 'I' ? 'checked' : ''}}>
                            <label class="form-check-label" for="i">
                                I
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="fotoenvelhecimento" value="II" id="ii" {{$cliente->facial->fotoenvelhecimento == 'II' ? 'checked' : ''}}>
                            <label class="form-check-label" for="ii">
                                II
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="fotoenvelhecimento" value="III" id="iii" {{$cliente->facial->fotoenvelhecimento == 'III' ? 'checked' : ''}}>
                            <label class="form-check-label" for="iii">
                                III
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="fotoenvelhecimento" value="IV" id="iv" {{$cliente->facial->fotoenvelhecimento == 'IV' ? 'checked' : ''}}>
                            <label class="form-check-label" for="iv">
                                IV
                            </label>
                        </div>
                </div>
                <br>
                <div class="mb-3 row">
                    <label for="obsfotoenv" class="col-sm-4 col-form-label" style="text-align: right;"><b>Observação:</b></label>
                    <div class="col-sm-6">
                        <input type="text" name="obsfotoenv" value="{{$cliente->facial->obsfotoenv ?? ''}}" class="form-control" id="obsfotoenv">
                    </div>
                </div>
            <br>
            <h5>MANCHAS PIGMENTARES (MELANINA)</h5>
            <div class="inline">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="melanina[]" value="Acromia" id="acromia" {{is_array($cliente->facial->manchas) && in_array('Acromia', $cliente->facial->manchas) ? 'checked' : ''}}>
                            <label class="form-check-label" for="acromia">
                                Acromia
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="melanina[]" value="Efelides" id="efelides" {{is_array($cliente->facial->manchas) && in_array('Efelides', $cliente->facial->manchas) ? 'checked' : ''}}>
                            <label class="form-check-label" for="efelides">
                                Efelides
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="melanina[]" value="Hipocromia" id="hipocromia" {{is_array($cliente->facial->manchas) && in_array('Hipocromia', $cliente->facial->manchas) ? 'checked' : ''}}>
                            <label class="form-check-label" for="hipocromia">
                                Hipocromia
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="melanina[]" value="Melasma" id="melasma" {{is_array($cliente->facial->manchas) && in_array('Melasma', $cliente->facial->manchas) ? 'checked' : ''}}>
                            <label class="form-check-label" for="melasma">
                                Melasma
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="melanina[]" value="Hipercromia" id="hipercromia" {{is_array($cliente->facial->manchas) && in_array('Hipercromia', $cliente->facial->manchas) ? 'checked' : ''}}>
                            <label class="form-check-label" for="hipercromia">
                                Hipercromia
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="melanina[]" value="Melanose Solar" id="melanosesolar" {{is_array($cliente->facial->manchas) && in_array("Melanose Solar", $cliente->facial->manchas) ? 'checked' : ''}}>
                            <label class="form-check-label" for="melanosesolar">
                                Melanose Solar
                            </label>
                        </div>
            </div>
            <br>
                <div class="mb-3 row">
                    <label for="outromelanina" class="col-sm-4 col-form-label" style="text-align: right;"><b>Outro:</b></label>
                    <div class="col-sm-6">
                 @php 
                    $first_diff = null;
                    $array1 = [
                        'Acromia',
                        'Efelides',
                        'Hipocromia',
                        'Melanose',
                        'Hipercromia',
                        'Melanose Solar'
                        ];
                        if($cliente->facial->manchas){
                    foreach ($cliente->facial->manchas as $element) {
                        if (array_search($element, $array1) === false) {
                            $first_diff = $element;
                            break;
                        }
                    }
                    }
                 @endphp
                        <input type="text" name="melanina[]" class="form-control" value="{{$first_diff ?? ''}}" id="outromelanina">
                    </div>
                </div>
            <br>
            <h5>ALTERAÇÕES VASCULARES</h5>
            <div class="inline">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="vasculares[]" value="Equimose" id="equimose" {{is_array($cliente->facial->alteracoes) && in_array('Equimose', $cliente->facial->alteracoes) ? 'checked' : ''}}>
                    <label class="form-check-label" for="equimose">
                        Equimose
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="vasculares[]" value="Petequias" id="petequias" {{is_array($cliente->facial->alteracoes) && in_array('Petequias', $cliente->facial->alteracoes) ? 'checked' : ''}}>
                    <label class="form-check-label" for="petequias">
                        Petequias
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="vasculares[]" value="Telangectasias" id="telangectasias" {{is_array($cliente->facial->alteracoes) && in_array('Telangectasias', $cliente->facial->alteracoes) ? 'checked' : ''}}>
                    <label class="form-check-label" for="telangectasias">
                        Telangectasias
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="vasculares[]" value="Eritema" id="eritema" {{is_array($cliente->facial->alteracoes) && in_array('Eritema', $cliente->facial->alteracoes) ? 'checked' : ''}}>
                    <label class="form-check-label" for="eritema">
                        Eritema
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="vasculares[]" value="Nevo Rubi" id="nevorubi" {{is_array($cliente->facial->alteracoes) && in_array('Nevo Rubi', $cliente->facial->alteracoes) ? 'checked' : ''}}>
                    <label class="form-check-label" for="nevorubi">
                        Nevo Rubi
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="vasculares[]" value="Rosacea" id="rosacea" {{is_array($cliente->facial->alteracoes) && in_array('Rosacea', $cliente->facial->alteracoes) ? 'checked' : ''}}>
                    <label class="form-check-label" for="rosacea">
                        Rosacea
                    </label>
                </div>
            </div>
            <br>
                <div class="mb-3 row">
                    <label for="outrovasculares" class="col-sm-4 col-form-label" style="text-align: right;"><b>Outro:</b></label>
                    <div class="col-sm-6">
                        @php
                        $first_diff = null;
                    $array1 = [
                        'Equimose',
                        'Petequias',
                        'Telangectasias',
                        'Eritema',
                        'Nevo Rubi',
                        'Rosacea'
                        ];
                        if($cliente->facial->alteracoes){
                    foreach ($cliente->facial->alteracoes as $element) {
                        if (array_search($element, $array1) === false) {
                            $first_diff = $element;
                            break;
                        }
                    }
                    }
                        @endphp
                        <input type="text" name="vasculares[]" value="{{$first_diff}}" class="form-control" id="outrovasculares">
                    </div>
                </div>
            <br>
            <h5>LESÕES DE PELE</h5>
            <div class="inline">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="lesoes[]" value="Comedões" id="comedoes" {{is_array($cliente->facial->lesoes) && in_array('Comedões', $cliente->facial->lesoes) ? 'checked' : ''}}>
                    <label class="form-check-label" for="comedoes">
                        Comedões
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="lesoes[]" value="Papula" id="papula" {{is_array($cliente->facial->lesoes) && in_array('Papula', $cliente->facial->lesoes) ? 'checked' : ''}}>
                    <label class="form-check-label" for="papula">
                        Papula
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="lesoes[]" value="Pustula" id="pustula" {{is_array($cliente->facial->lesoes) && in_array('Pustula', $cliente->facial->lesoes) ? 'checked' : ''}}>
                    <label class="form-check-label" for="pustula">
                        Pustula
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="lesoes[]" value="Millium" id="millium" {{is_array($cliente->facial->lesoes) && in_array('Millium', $cliente->facial->lesoes) ? 'checked' : ''}}>
                    <label class="form-check-label" for="millium">
                        Millium
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="lesoes[]" value="Cisto" id="cisto" {{is_array($cliente->facial->lesoes) && in_array('Cisto', $cliente->facial->lesoes) ? 'checked' : ''}}>
                    <label class="form-check-label" for="cisto">
                        Cisto
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="lesoes[]" value="Nodulo" id="nodulo" {{is_array($cliente->facial->lesoes) && in_array('Nodulo', $cliente->facial->lesoes) ? 'checked' : ''}}>
                    <label class="form-check-label" for="nodulo">
                        Nodulo
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="lesoes[]" value="Siringoma" id="siringoma" {{is_array($cliente->facial->lesoes) && in_array('Siringoma', $cliente->facial->lesoes) ? 'checked' : ''}}>
                    <label class="form-check-label" for="siringoma">
                        Siringoma
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="lesoes[]" value="Nevo Melanocitico" id="nevomelanocitico" {{is_array($cliente->facial->lesoes) && in_array('Nevo Melanocitico', $cliente->facial->lesoes) ? 'checked' : ''}}>
                    <label class="form-check-label" for="nevomelanocitico">
                        Nevo Melanocitico
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="lesoes[]" value="Xantelasma" id="xantelasma" {{is_array($cliente->facial->lesoes) && in_array('Xantelasma', $cliente->facial->lesoes) ? 'checked' : ''}}>
                    <label class="form-check-label" for="xantelasma">
                        Xantelasma
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="lesoes[]" value="Dermatite Hiperqueratose" id="dermatite" {{is_array($cliente->facial->lesoes) && in_array('Dermatite Hiperqueratose', $cliente->facial->lesoes) ? 'checked' : ''}}>
                    <label class="form-check-label" for="dermatite">
                        Dermatite Hiperqueratose
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="lesoes[]" value="Psoriase" id="psoriase" {{is_array($cliente->facial->lesoes) && in_array('Psoriase', $cliente->facial->lesoes) ? 'checked' : ''}}>
                    <label class="form-check-label" for="psoriase">
                        Psoriase
                    </label>
                </div>
            </div>
            <br>
                <div class="mb-3 row">
                    <label for="outrolesoes" class="col-sm-4 col-form-label" style="text-align: right;"><b>Outro:</b></label>
                    <div class="col-sm-6">
                        @php 
                        $first_diff = null;
                    $array1 = [
                        'Comedões',
                        'Papula',
                        'Pustula',
                        'Millium',
                        'Cisto',
                        'Nodulo',
                        'Siringoma',
                        'Nevo Melanocitico',
                        'Xantelasma',
                        'Dermatite Hiperqueratose',
                        'Psoriase'
                        ];
                        if($cliente->facial->lesoes){
                    
                    foreach ($cliente->facial->lesoes as $element) {
                        if (array_search($element, $array1) === false) {
                            $first_diff = $element;
                            break;
                        }
                    }
                    }
                        @endphp
                        <input type="text" name="lesoes[]" class="form-control" id="outrolesoes" value="{{$first_diff}}">
                    </div>
                </div>
            <br>
            <h5>CICATRIZ</h5>
            <div class="inline">
                <div class="form-check form-check-inline">
                    
                    <input class="form-check-input" type="checkbox" name="cicatriz[]" value="Hipertrofia" id="hipertrofia" {{is_array($cliente->facial->cicatriz) && in_array('Hipertrofia', $cliente->facial->cicatriz) ? 'checked' : ''}}>
                    <label class="form-check-label" for="hipertrofia">
                        Hipertrofia
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="cicatriz[]" value="Atrofia" id="atrofia" {{is_array($cliente->facial->cicatriz) && in_array('Atrofia', $cliente->facial->cicatriz) ? 'checked' : ''}}>
                    <label class="form-check-label" for="atrofia">
                        Atrofia
                    </label>
                </div>
                
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="cicatriz[]" value="Queloideana" id="queloideana" {{is_array($cliente->facial->cicatriz) && in_array('Queloideana', $cliente->facial->cicatriz) ? 'checked' : ''}}>
                    <label class="form-check-label" for="queloideana">
                        Queloideana
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="cicatriz[]" value="Retratil" id="retratil" {{is_array($cliente->facial->cicatriz) && in_array('Retratil', $cliente->facial->cicatriz) ? 'checked' : ''}}>
                    <label class="form-check-label" for="retratil">
                        Retratil
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="cicatriz[]" value="Hipercromica" id="hipercromica" {{is_array($cliente->facial->cicatriz) && in_array('Hipercromica', $cliente->facial->cicatriz) ? 'checked' : ''}}>
                    <label class="form-check-label" for="hipercromica">
                        Hipercromica
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="cicatriz[]" value="Hipocromica" id="hipocromica" {{is_array($cliente->facial->cicatriz) && in_array('Hipocromica', $cliente->facial->cicatriz) ? 'checked' : ''}}>
                    <label class="form-check-label" for="hipocromica">
                        Hipocromica
                    </label>
                </div>
            </div>
            <br>
            <h5>PELOS</h5>
            <div class="inline">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="pelos[]" value="Hirsutismo" id="hirsutismo" {{is_array($cliente->facial->pelos) && in_array('Hirsutismo', $cliente->facial->pelos) ? 'checked' : ''}}>
                    <label class="form-check-label" for="hirsutismo">
                        Hirsutismo
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="pelos[]" value="Hipertricose" id="hipertricose" {{is_array($cliente->facial->pelos) && in_array('Hipertricose', $cliente->facial->pelos) ? 'checked' : ''}}>
                    <label class="form-check-label" for="hipertricose">
                        Hipertricose
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="pelos[]" value="Alopecia" id="alopecia" {{is_array($cliente->facial->pelos) && in_array('Alopecia', $cliente->facial->pelos) ? 'checked' : ''}}>
                    <label class="form-check-label" for="alopecia">
                        Alopecia
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="pelos[]" value="Foliculite" id="foliculite" {{is_array($cliente->facial->pelos) && in_array('Foliculite', $cliente->facial->pelos) ? 'checked' : ''}}>
                    <label class="form-check-label" for="foliculite">
                        Foliculite
                    </label>
                </div>
            </div>
            <br>
            <h5>OLHEIRAS</h5>
            <div class="inline">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" value="1"  name="olheiras" id="solheira" {{$cliente->facial->olheiras ? 'checked' : ''}}>
                    <label class="form-check-label" for="solheira">
                        Sim
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" value="0" name="olheiras" id="nolheira" {{$cliente->facial->olheiras ? '' : 'checked'}}>
                    <label class="form-check-label" for="nolheira">
                        Não
                    </label>
                </div>
            </div>
            <br>
                <div class="mb-3 row">
                    <label for="tipoolheira" class="col-sm-4 col-form-label" style="text-align: right;"><b>Tipo/Observação:</b></label>
                    <div class="col-sm-6">
                        <input type="text" name="tipoolheira" value="{{$cliente->facial->tipoolheira ?? ''}}" class="form-control" id="tipoolheira">
                    </div>
                </div>
            <br>
            <h5>FLACIDEZ</h5>
                <div class="inline">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="tissular" id="tissular" {{$cliente->facial->flacidez->tissular ? 'checked' : ''}}>
                        <label class="form-check-label" for="tissular">
                            Tissular
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="muscular" id="muscular" {{$cliente->facial->flacidez->muscular ? 'checked' : ''}}>
                        <label class="form-check-label" for="muscular">
                            Muscular
                        </label>
                    </div>
                </div>
                <br>
                <div class="mb-3 row">
                    <label for="ltissular" class="col-sm-4 col-form-label" style="text-align: right;"><b>Localização da Flacidez Tissular:</b></label>
                    <div class="col-sm-6">
                        <input type="text" name="ltissular" class="form-control" id="ltissular" value="{{$cliente->facial->flacidez->ltissular ?? ''}}">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="lmuscular" class="col-sm-4 col-form-label" style="text-align: right;"><b>Localização da Flacidez Muscular:</b></label>
                    <div class="col-sm-6">
                        <input type="text" name="lmuscular" class="form-control" id="lmuscular" value="{{$cliente->facial->flacidez->lmuscular ?? ''}}">
                    </div>
                </div>
            <br>
            <h5 >OBJETIVOS</h5>
            <div class="mb-3">
            <textarea class="form-control" name="objetivo" id="objetivo" rows="3">{{$cliente->facial->objetivo ?? ''}}</textarea>
            </div>
            <br>
            <h5>TRATAMENTO PROPOSTO</h5>
            <div class="mb-3">
            <textarea class="form-control" name="tratamento" id="tratamento" rows="3">{{$cliente->facial->tratamento ?? ''}}</textarea>
            </div>
            <div class="" style="width:100%; text-align:center;">
                    <button class="btn btn-primary" style="width: 40%;"><ion-icon name="save-outline"></ion-icon> Salvar Ficha Facial</button>
                </div>
        </form>
    </div>
@endsection