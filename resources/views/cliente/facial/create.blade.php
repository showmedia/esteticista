@extends('.cliente.show')
@section('content')
    <div class="formulario">
        <h4>FICHA DE ANAMNESE FACIAL</h4>

        <form action="/facial/{{$cliente->id}}" method="post">
            @csrf
            <br>
            <h5>BIOTIPO CUTANEO</h5>
                <div class="inline">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="biotipo" value="Eudermica" id="eudermica">
                        <label class="form-check-label" for="eudermica">
                            Eudermica
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="biotipo" value="Lipidica" id="lipidica">
                        <label class="form-check-label" for="lipidica">
                            Lipidica
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="biotipo" value="Alipica" id="alipica">
                        <label class="form-check-label" for="alipica">
                            Alipica
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="biotipo" value="Mista" id="mista">
                        <label class="form-check-label" for="mista">
                            Mista
                        </label>
                    </div>
                </div>
            <br>
            <h5>ESTADO CUTANEO</h5>
                <div class="inline">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="estado" value="Normal" id="normal">
                        <label class="form-check-label" for="normal">
                            Normal
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="estado" value="Desidratado" id="desidratado">
                        <label class="form-check-label" for="desidratado">
                            Desidratado
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="estado" value="Sensibilizado" id="sensibilizado">
                        <label class="form-check-label" for="sensibilizado">
                            Sensibilizado
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="estado" value="Acneico" id="acneico">
                        <label class="form-check-label" for="acneico">
                            Acneico
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="estado" value="Seborreico" id="seborreico">
                        <label class="form-check-label" for="seborreico">
                            Seborreico
                        </label>
                    </div>  
                  
                </div>
            <br>
                <h5>TEXTURA</h5>
                    <div class="inline">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="textura" value="Lisa" id="lisa">
                            <label class="form-check-label" for="lisa">
                                Lisa
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="textura" value="Aspera" id="aspera">
                            <label class="form-check-label" for="aspera">
                                Aspera
                            </label>
                        </div>
                    </div>
            <br>
            <h5>ESPESSURA</h5>
                <div class="inline">
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="espessura" value="Fina" id="fina">
                            <label class="form-check-label" for="fina">
                                Fina
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="espessura" value="Muito Fina" id="mfina">
                            <label class="form-check-label" for="mfina">
                                Muito Fina
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="espessura" value="Espessa" id="espessa">
                            <label class="form-check-label" for="espessa">
                                Espessa
                            </label>
                        </div> 
                </div>
            <br>
                <h5>OSTIO</h5>
                <div class="inline">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ostio" value="Dilatados na Zona T" id="zonat">
                            <label class="form-check-label" for="zonat">
                                Dilatados na Zona T
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="ostio" value="Dilatados em Toda Face" id="todaface">
                            <label class="form-check-label" for="todaface">
                                Dilatados em Toda Face
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="Contraido" name="ostio" id="contraidos">
                            <label class="form-check-label" for="contraidos">
                                Contraido
                            </label>
                        </div>
                </div>
            <br>
                <h5>ACNE</h5>
                <div class="INLINE">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="acne" value="Grau I" id="graui">
                            <label class="form-check-label" for="graui">
                                Grau I
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="acne" value="Grau II" id="grauii">
                            <label class="form-check-label" for="grauii">
                                Grau II
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="acne" value="Grau III" id="grauiii">
                            <label class="form-check-label" for="grauiii">
                                Grau III
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="acne" value="Grau IV" id="grauiv">
                            <label class="form-check-label" for="grauiv">
                                Grau IV
                            </label>
                        </div>
                </div>
                <br>
                <h5>COR DE PELE</h5>
                    <div class="inline">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="cor" value="Branca" id="branca">
                            <label class="form-check-label" for="branca">
                                Branca
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="cor" value="Negra" id="negra">
                            <label class="form-check-label" for="negra">
                                Negra
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="cor" value="Amarela" id="amarela">
                            <label class="form-check-label" for="amarela">
                                Amarela
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="cor" value="Parda" id="parda">
                            <label class="form-check-label" for="parda">
                                Parda
                            </label>
                        </div>
                    </div>
                <br>
                <h5>INVOLUÇÃO CUTANEA</h5>
                <div class="inline">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="involucao[]" value="Linhas" id="linhas">
                            <label class="form-check-label" for="linhas">
                                Linhas
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="involucao[]" value="Sulcos" id="sulcos">
                            <label class="form-check-label" for="sulcos">
                                Sulcos
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="involucao[]" value="Rugas" id="rugas">
                            <label class="form-check-label" for="rugas">
                                Rugas
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="involucao[]" value="Elastose" id="elastose">
                            <label class="form-check-label" for="elastose">
                                Elastose
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="involucao[]" value="Ptose" id="ptose">
                            <label class="form-check-label" for="ptose">
                                Ptose
                            </label>
                        </div>
                </div>
                <br>
                <div class="mb-3 row">
                    <label for="localinvolucao" class="col-sm-4 col-form-label" style="text-align: right;"><b>Local:</b></label>
                    <div class="col-sm-6">
                        <input type="text" name="localinvolucao" class="form-control" id="localinvolucao">
                    </div>
                </div>
            <br>
            <h5>FOTOTIPO CUTANEO FITZPATRICK</h5>
                <div class="inline">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="fototipo" value="Tipo I" id="tipoi">
                            <label class="form-check-label" for="tipoi">
                                Tipo I
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="fototipo" value="Tipo II" id="tipoii">
                            <label class="form-check-label" for="tipoii">
                                Tipo II
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="fototipo" value="Tipo III" id="tipoiii">
                            <label class="form-check-label" for="tipoiii">
                                Tipo III
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="fototipo" value="Tipo IV" id="tipoiv">
                            <label class="form-check-label" for="tipoiv">
                                Tipo IV
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="fototipo" value="Tipo V" id="tipov">
                            <label class="form-check-label" for="tipov">
                                Tipo V
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="fototipo" value="Tipo VI" id="tipovi">
                            <label class="form-check-label" for="tipovi">
                                Tipo VI
                            </label>
                        </div>
                </div>
            <br>
            <h5>FOTOENVELHECIMENTO ESCALA DE GLOGAU</h5>
                <div class="inline">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="fotoenvelhecimento" value="I" id="i">
                            <label class="form-check-label" for="i">
                                I
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="fotoenvelhecimento" value="II" id="ii">
                            <label class="form-check-label" for="ii">
                                II
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="fotoenvelhecimento" value="III" id="iii">
                            <label class="form-check-label" for="iii">
                                III
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="fotoenvelhecimento" value="IV" id="iv">
                            <label class="form-check-label" for="iv">
                                IV
                            </label>
                        </div>
                </div>
                <br>
                <div class="mb-3 row">
                    <label for="obsfotoenv" class="col-sm-4 col-form-label" style="text-align: right;"><b>Observação:</b></label>
                    <div class="col-sm-6">
                        <input type="text" name="obsfotoenv" class="form-control" id="obsfotoenv">
                    </div>
                </div>
            <br>
            <h5>MANCHAS PIGMENTARES (MELANINA)</h5>
            <div class="inline">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="melanina[]" value="Acromia" id="acromia">
                            <label class="form-check-label" for="acromia">
                                Acromia
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="melanina[]" value="Efelides" id="efelides">
                            <label class="form-check-label" for="efelides">
                                Efelides
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="melanina[]" value="hipocromia" id="hipocromia">
                            <label class="form-check-label" for="hipocromia">
                                Hipocromia
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="melanina[]" value="Melasma" id="melasma">
                            <label class="form-check-label" for="melasma">
                                Melasma
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="melanina[]" value="Hipercromia" id="hipercromia">
                            <label class="form-check-label" for="hipercromia">
                                Hipercromia
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="melanina[]" value="Melanose Solar" id="melanosesolar">
                            <label class="form-check-label" for="melanosesolar">
                                Melanose Solar
                            </label>
                        </div>
            </div>
            <br>
                <div class="mb-3 row">
                    <label for="outromelanina" class="col-sm-4 col-form-label" style="text-align: right;"><b>Outro:</b></label>
                    <div class="col-sm-6">
                        <input type="text" name="melanina[]" class="form-control" id="outromelanina">
                    </div>
                </div>
            <br>
            <h5>ALTERAÇÕES VASCULARES</h5>
            <div class="inline">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="vasculares[]" value="Equimose" id="equimose">
                    <label class="form-check-label" for="equimose">
                        Equimose
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="vasculares[]" value="Petequias" id="petequias">
                    <label class="form-check-label" for="petequias">
                        Petequias
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="vasculares[]" value="Telangectasias" id="telangectasias">
                    <label class="form-check-label" for="telangectasias">
                        Telangectasias
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="vasculares[]" value="Eritema" id="eritema">
                    <label class="form-check-label" for="eritema">
                        Eritema
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="vasculares[]" value="Nevo Rubi" id="nevorubi">
                    <label class="form-check-label" for="nevorubi">
                        Nevo Rubi
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="vasculares[]" value="Rosacea" id="rosacea">
                    <label class="form-check-label" for="rosacea">
                        Rosacea
                    </label>
                </div>
            </div>
            <br>
                <div class="mb-3 row">
                    <label for="outrovasculares" class="col-sm-4 col-form-label" style="text-align: right;"><b>Outro:</b></label>
                    <div class="col-sm-6">
                        <input type="text" name="vasculares[]" class="form-control" id="outrovasculares">
                    </div>
                </div>
            <br>
            <h5>LESÕES DE PELE</h5>
            <div class="inline">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="lesoes[]" value="Comedões" id="comedoes">
                    <label class="form-check-label" for="comedoes">
                        Comedões
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="lesoes[]" value="Papula" id="papula">
                    <label class="form-check-label" for="papula">
                        Papula
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="lesoes[]" value="Pustula" id="pustula">
                    <label class="form-check-label" for="pustula">
                        Pustula
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="lesoes[]" value="Millium" id="millium">
                    <label class="form-check-label" for="millium">
                        Millium
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="lesoes[]" value="Cisto" id="cisto">
                    <label class="form-check-label" for="cisto">
                        Cisto
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="lesoes[]" value="Nodulo" id="nodulo">
                    <label class="form-check-label" for="nodulo">
                        Nodulo
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="lesoes[]" value="Siringoma" id="siringoma">
                    <label class="form-check-label" for="siringoma">
                        Siringoma
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="lesoes[]" value="Nevo Melanocitico" id="nevomelanocitico">
                    <label class="form-check-label" for="nevomelanocitico">
                        Nevo Melanocitico
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="lesoes[]" value="Xantelasma" id="xantelasma">
                    <label class="form-check-label" for="xantelasma">
                        Xantelasma
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="lesoes[]" value="Dermatite Hiperqueratose" id="dermatite">
                    <label class="form-check-label" for="dermatite">
                        Dermatite Hiperqueratose
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="lesoes[]" value="Psoriase" id="psoriase">
                    <label class="form-check-label" for="psoriase">
                        Psoriase
                    </label>
                </div>
            </div>
            <br>
                <div class="mb-3 row">
                    <label for="outrolesoes" class="col-sm-4 col-form-label" style="text-align: right;"><b>Outro:</b></label>
                    <div class="col-sm-6">
                        <input type="text" name="lesoes[]" class="form-control" id="outrolesoes">
                    </div>
                </div>
            <br>
            <h5>CICATRIZ</h5>
            <div class="inline">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="cicatriz[]" value="Hipertrofia" id="hipertrofia">
                    <label class="form-check-label" for="hipertrofia">
                        Hipertrofia
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="cicatriz[]" value="Atrofia" id="atrofia">
                    <label class="form-check-label" for="atrofia">
                        Atrofia
                    </label>
                </div>
                
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="cicatriz[]" value="Queloideana" id="queloideana">
                    <label class="form-check-label" for="queloideana">
                        Queloideana
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="cicatriz[]" value="Retratil" id="retratil">
                    <label class="form-check-label" for="retratil">
                        Retratil
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="cicatriz[]" value="Hipercromica" id="hipercromica">
                    <label class="form-check-label" for="hipercromica">
                        Hipercromica
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="cicatriz[]" value="Hipocromica" id="hipocromica">
                    <label class="form-check-label" for="hipocromica">
                        Hipocromica
                    </label>
                </div>
            </div>
            <br>
            <h5>PELOS</h5>
            <div class="inline">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="pelos[]" value="Hirsutismo" id="hirsutismo">
                    <label class="form-check-label" for="hirsutismo">
                        Hirsutismo
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="pelos[]" value="Hipertricose" id="hipertricose">
                    <label class="form-check-label" for="hipertricose">
                        Hipertricose
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="pelos[]" value="Alopecia" id="alopecia">
                    <label class="form-check-label" for="alopecia">
                        Alopecia
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="pelos[]" value="Foliculite" id="foliculite">
                    <label class="form-check-label" for="foliculite">
                        Foliculite
                    </label>
                </div>
            </div>
            <br>
            <h5>OLHEIRAS</h5>
            <div class="inline">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" value="1" name="olheiras" id="solheira">
                    <label class="form-check-label" for="solheira">
                        Sim
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" checked type="radio" value="0" name="olheiras" id="nolheira">
                    <label class="form-check-label" for="nolheira">
                        Não
                    </label>
                </div>
            </div>
            <br>
                <div class="mb-3 row">
                    <label for="tipoolheira" class="col-sm-4 col-form-label" style="text-align: right;"><b>Tipo/Observação:</b></label>
                    <div class="col-sm-6">
                        <input type="text" name="tipoolheira" class="form-control" id="tipoolheira">
                    </div>
                </div>
            <br>
            <h5>FLACIDEZ</h5>
                <div class="inline">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="tissular" id="tissular">
                        <label class="form-check-label" for="tissular">
                            Tissular
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="muscular" id="muscular">
                        <label class="form-check-label" for="muscular">
                            Muscular
                        </label>
                    </div>
                </div>
                <br>
                <div class="mb-3 row">
                    <label for="ltissular" class="col-sm-4 col-form-label" style="text-align: right;"><b>Localização da Flacidez Tissular:</b></label>
                    <div class="col-sm-6">
                        <input type="text" name="ltissular" class="form-control" id="ltissular">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="lmuscular" class="col-sm-4 col-form-label" style="text-align: right;"><b>Localização da Flacidez Muscular:</b></label>
                    <div class="col-sm-6">
                        <input type="text" name="lmuscular" class="form-control" id="lmuscular">
                    </div>
                </div>
            <br>
            <h5 >OBJETIVOS</h5>
            <div class="mb-3">
            <textarea class="form-control" name="objetivo" id="objetivo" rows="3"></textarea>
            </div>
            <br>
            <h5>TRATAMENTO PROPOSTO</h5>
            <div class="mb-3">
            <textarea class="form-control" name="tratamento" id="tratamento" rows="3"></textarea>
            </div>
            <div class="" style="width:100%; text-align:center;">
                    <button class="btn btn-primary" style="width: 40%;"><ion-icon name="save-outline"></ion-icon> Salvar Ficha Facial</button>
                </div>
        </form>
    </div>
@endsection