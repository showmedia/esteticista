@extends('.layouts.main')

@section('content')

    <div class="formulario">

        <h4>FICHA DE ANAMNESE CORPORAL</h4>



        <form action="/anamnese/{{$cliente->id}}" method="post">

            @csrf

            <br>

            <h5>HIDROLIPODISTROFIA GINÓDE ( HLDG )</h5>

            <div class="inline">

            <h6>Tipo:</h6>

            <div class="form-check form-check-inline">

                <input class="form-check-input" type="radio" value="FLÁCIDA" name="tipo" id="flacida">

                <label class="form-check-label" for="flacida">

                    Flácida

                </label>

            </div>

            <div class="form-check form-check-inline">

                <input class="form-check-input" type="radio" value="EDEMATOSA" name="tipo" id="edematosa">

                <label class="form-check-label" for="edematosa">

                    Edematosa

                </label>

            </div>

            <div class="form-check form-check-inline">

                <input class="form-check-input" type="radio" value="COMPACTA" name="tipo" id="compacta">

                <label class="form-check-label" for="compacta">

                    Compacta

                </label>

            </div>

            <div class="form-check form-check-inline">

                <input class="form-check-input" type="radio" value="MISTA" name="tipo" id="mista">

                <label class="form-check-label" for="mista">

                    Mista

                </label>

            </div>

            </div>

            <br>

            <div class="inline">

                <h6>Grau:</h6>

                <div class="form-check form-check-inline">

                    <input class="form-check-input" type="radio" value="I" name="grau" id="graui">

                    <label class="form-check-label" for="graui">

                        I

                    </label>

                </div>

                <div class="form-check form-check-inline">

                    <input class="form-check-input" type="radio" value="II" name="grau" id="grauii">

                    <label class="form-check-label" for="grauii">

                        II

                    </label>

                </div>

                <div class="form-check form-check-inline">

                    <input class="form-check-input" type="radio" value="III" name="grau" id="grauiii">

                    <label class="form-check-label" for="grauiii">

                        III

                    </label>

                </div>

                <div class="form-check form-check-inline">

                    <input class="form-check-input" type="radio" value="IV" name="grau" id="grauiv">

                    <label class="form-check-label" for="grauiv">

                        IV

                    </label>

                </div>

            </div>

            <br>



            <h5>EDEMA</h5>

            <div class="inline">

                <h6>Teste do Cacifo:</h6>

                <div class="form-check form-check-inline">

                    <input class="form-check-input" type="radio" value="1" name="cacifo" id="cacifopositivo">

                    <label class="form-check-label" for="cacifopositivo">

                        Positivo

                    </label>

                </div>

                <div class="form-check form-check-inline">

                    <input class="form-check-input" type="radio" value="0" name="cacifo" id="cacifonegativo">

                    <label class="form-check-label" for="cacifonegativo">

                        Negativo

                    </label>

                </div>

            </div>

            <br>

            <div class="inline">

                <h6>Teste de dígito pressão:</h6>

                <div class="form-check form-check-inline">

                    <input class="form-check-input" type="radio" value="1" name="pressao" id="pressaopositivo">

                    <label class="form-check-label" for="pressaopositivo">

                        Positivo

                    </label>

                </div>

                <div class="form-check form-check-inline">

                    <input class="form-check-input" type="radio" value="0" name="pressao" id="pressaonegativo">

                    <label class="form-check-label" for="pressaonegativo">

                        Negativo

                    </label>

                </div>

            </div>

            <br>

            <div class="mb-3 row">

                <label for="cansaco" class="col-sm-4 col-form-label" style="text-align: right;"><b>Sensação de Peso | Cansaço:</b></label>

                <div class="col-sm-6">

                <input type="text" name="cansaco"  class="form-control" id="cansaco">

                </div>

            </div>

            <h5>LIPODISTROFIA</h5>

            <div class="inline">

                <h6>Gordura:</h6>

                <div class="form-check form-check-inline">

                    <input class="form-check-input" type="radio" value="COMPACTA" name="gordura" id="gorduracompacta">

                    <label class="form-check-label" for="gorduracompacta">

                        Compacta

                    </label>

                </div>

                <div class="form-check form-check-inline">

                    <input class="form-check-input" type="radio" value="FLÁCIDA" name="gordura" id="gorduraflacida">

                    <label class="form-check-label" for="gorduraflacida">

                        Flácida

                    </label>

                </div>

            </div>

            <br>

            <div class="inline">

                <h6>Distribuição de Gordura:</h6>

                <div class="form-check form-check-inline">

                    <input class="form-check-input" type="radio" value="Localizada" name="distgordura" id="gorduralocalizada">

                    <label class="form-check-label" for="gorduralocalizada">

                        Localizada

                    </label>

                </div>

                <div class="form-check form-check-inline">

                    <input class="form-check-input" type="radio" value="GENERALIZADA" name="distgordura" id="gordurageneralizada">

                    <label class="form-check-label" for="gordurageneralizada">

                        Generalizada

                    </label>

                </div>

            </div>

            <br>

            <div class="mb-3 row">

                <label for="localizacao" class="col-sm-4 col-form-label" style="text-align: right;"><b>Localização:</b></label>

                <div class="col-sm-6">

                <input type="text" name="localizacao" class="form-control" id="localizacao">

                </div>

</div>

            <div class="inline">

                <h6>Biotipo:</h6>

                <div class="form-check form-check-inline">

                    <input class="form-check-input" type="radio" value="ECTOMORFO" name="biotipo" id="ectomorfo">

                    <label class="form-check-label" for="ectomorfo">

                        Ectomorfo

                    </label>

                </div>

                <div class="form-check form-check-inline">

                    <input class="form-check-input" type="radio" value="MESOMORFO" name="biotipo" id="mesomorfo">

                    <label class="form-check-label" for="mesomorfo">

                        Mesoformo

                    </label>

                </div>

                <div class="form-check form-check-inline">

                    <input class="form-check-input" type="radio" value="ENDOMORFO" name="biotipo" id="endomorfo">

                    <label class="form-check-label" for="endomorfo">

                        Endomorfo

                    </label>

                </div>

            </div>

            <div class="row g-3">

                <div class="col-4">

                    <input type="text" class="form-control"   name="peso" placeholder="Peso" aria-label="Peso">

                </div>

                <div class="col-4">

                    <input type="text" class="form-control"   name="altura" placeholder="Altura" aria-label="Altura">

                </div>

                <div class="col-4">

                    <input type="text" class="form-control"   name="ideal" placeholder="Peso Ideal" aria-label="Peso Ideal">

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

                        <input type="text"  name="ltissular" class="form-control" id="ltissular">

                    </div>

                </div>

                <div class="mb-3 row">

                    <label for="lmuscular" class="col-sm-4 col-form-label" style="text-align: right;"><b>Localização da Flacidez Muscular:</b></label>

                    <div class="col-sm-6">

                        <input type="text"  name="lmuscular" class="form-control" id="lmuscular">

                    </div>

                </div>

                <br>

                <div class="" style="width:100%; text-align:center;">

                    <button class="btn btn-primary" style="width: 40%;"><ion-icon name="save-outline"></ion-icon> Salvar Ficha Anamnese</button>

                </div>

        </form>

    </div>

@endsection