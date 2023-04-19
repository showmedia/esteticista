<!-- Modal -->
<div class="modal fade modal-lg" id="modalcreate" tabindex="-1" aria-labelledby="modalcreate" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="/geral/{{$cliente->id}}" method="post">
            @csrf
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar Anamnese</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <div class="formulario">

                <h5>DADOS PESSOAIS</h5>
                <div class="inline">
                    <b style="margin-right: 5px;">Estado Civil: </b>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="estadocivil" value="Casado(a)" id="casado">
                        <label class="form-check-label" for="casado">
                            Casado(a)
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="estadocivil" value="Solteiro(a)" id="solteiro">
                        <label class="form-check-label" for="solteiro">
                            Solteiro(a)
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="estadocivil" value="Viuvo(a)" id="viuvo">
                        <label class="form-check-label" for="viuvo">
                            Viuvo(a)
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="estadocivil" value="Separado(a)" id="separado">
                        <label class="form-check-label" for="separado">
                            Separado(a)
                        </label>
                    </div>
                </div>
                <br>
             
                <div class="inline">
                    <b style="margin-right: 5px;">Sexo: </b>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sexo" value="Masculino" id="masculino">
                        <label class="form-check-label" for="masculino">
                            Masculino
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="sexo" value="Feminino" id="feminino">
                        <label class="form-check-label" for="feminino">
                            Feminino
                        </label>
                    </div>
                </div>
                <br>
                <div class="inline">
                    <div class="mb-3 row">
                        <label for="profissao" class="col-sm-3 col-form-label" style="text-align: right;"><b>Profissão:</b></label>
                        <div class="col-sm-9">
                            <input type="text" name="profissao" class="form-control" id="profissao">
                        </div>
                    </div>
                </div>
                <br>
                <hr>
                <h5>QUEIXA PRINCIPAL</h5>
                <div class="mb-3 row">
                    <div class="col-md-7">
                        <input type="text" name="queixa" id="queixa" class="form-control">

                    </div>
                </div>
                <hr>
                <h5>HÁBITOS DIÁRIOS</h5>
                <div class="row">
                    <div class="col-md-7">
                        <div class="inline">
                            <b style="margin-right: 5px;">Tratamento Estético Anterior: </b>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tratanterior" value="1" id="tratsim">
                                <label class="form-check-label" for="tratsim">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tratanterior" value="0" id="tratnao">
                                <label class="form-check-label" for="tratnao">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <input type="text" name="qualtrata" placeholder="Qual?" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7">
                        <div class="inline">
                            <b style="margin-right: 5px;">Usa Lentes de Contato: </b>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="lentescontato" value="1" id="lentesim">
                                <label class="form-check-label" for="lentesim">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="lentescontato" value="0" id="lentenao">
                                <label class="form-check-label" for="lentenao">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7">
                        <div class="inline">
                            <b style="margin-right: 5px;">Utilização de Cosméticos: </b>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="utilcosmeticos" value="1" id="utilcosim">
                                <label class="form-check-label" for="utilcosim">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="utilcosmeticos" value="0" id="utilconao">
                                <label class="form-check-label" for="utilconao">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <input type="text" name="qualcosmeticos" placeholder="Qual?" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7">
                        <div class="inline">
                            <b style="margin-right: 5px;">Exposição ao Sol: </b>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="exposol" value="1" id="exposolsim">
                                <label class="form-check-label" for="exposolsim">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="exposol" value="0" id="exposolnao">
                                <label class="form-check-label" for="exposolnao">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7">
                        <div class="inline">
                            <b style="margin-right: 5px;">Usa Filtro Solar?: </b>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="filtrosolar" value="1" id="filtrosolarsim">
                                <label class="form-check-label" for="filtrosolarsim">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="filtrosolar" value="0" id="filtrosolarnao">
                                <label class="form-check-label" for="filtrosolarnao">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <input type="text" name="freqfiltro" placeholder="Qual Frequencia?" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7">
                        <div class="inline">
                            <b style="margin-right: 5px;">Tabagismo: </b>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tabagismo" value="1" id="tabagismosim">
                                <label class="form-check-label" for="tabagismosim">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tabagismo" value="0" id="tabagismonao">
                                <label class="form-check-label" for="tabagismonao">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                    <input type="text" name="qtncigarrosdia" placeholder="Cigarros / dia" class="form-control">
                        
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7">
                        <div class="inline">
                            <b style="margin-right: 5px;">Bebida Alcoólica: </b>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ingerebebida" value="1" id="bebidasim">
                                <label class="form-check-label" for="bebidasim">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ingerebebida" value="0" id="bebidanao">
                                <label class="form-check-label" for="bebidanao">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <input type="text" name="freqbebida" placeholder="Frequencia" class="form-control">   
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="inline">
                         <b style="margin-right: 5px;">Funcionamento Intestinal: </b>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="funcintestinal" value="1-2 Vezes / Semana" id="12semanas">
                                <label class="form-check-label" for="12semanas">
                                    1-2 / Semana
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="funcintestinal" value="3-4 Vezes / Semana" id="34semanas">
                                <label class="form-check-label" for="34semanas">
                                    3-4 / Semana
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="funcintestinal" value="1-2 Vezes / Dia" id="12dia">
                                <label class="form-check-label" for="12dia">
                                    1-2 / Dia
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="funcintestinal" value="3-4 Vezes / Dia" id="34dia">
                                <label class="form-check-label" for="34dia">
                                    3-4 / Dia
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="inline">
                            <b style="margin-right: 5px;">Qualidade do Sono: </b>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="qualsono" value="Boa" id="qualsonoboa">
                                <label class="form-check-label" for="qualsonoboa">
                                    Boa
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="qualsono" value="Regular" id="qualsonoregular">
                                <label class="form-check-label" for="qualsonoregular">
                                    Regular
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="qualsono" value="Péssima" id="qualsonopessima">
                                <label class="form-check-label" for="qualsonopessima">
                                    Péssima
                                </label>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                    <input type="text" name="horasnoite" placeholder="Horas / Noite" class="form-control">   
                    
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5"><b>Ingestão de água (copos/dia):</b></div>
                    <div class="col-md-3">
                    <input type="text" name="ingagua" class="form-control">
                    </div>
                </div>

                <div class="row">
                <div class="col-md-8">
                        <div class="inline">
                            <b style="margin-right: 5px;">Alimentação: </b>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="alimentacao" value="Boa" id="aliboa">
                                <label class="form-check-label" for="aliboa">
                                    Boa
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="alimentacao" value="Regular" id="aliregular">
                                <label class="form-check-label" for="aliregular">
                                    Regular
                                </label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="alimentacao" value="Péssima" id="alipessima">
                                <label class="form-check-label" for="alipessima">
                                    Péssima
                                </label>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4">
                    <input type="text" name="alimpref" placeholder="Alimentos Preferência" class="form-control">   

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5">
                        <div class="inline">
                            <b style="margin-right: 5px;">Ativ Física: </b>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ativfisica" value="1" id="ativfisicasim">
                                <label class="form-check-label" for="ativfisicasim">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="ativfisica" value="0" id="ativfisicanao">
                                <label class="form-check-label" for="ativfisicanao">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="freqativ" placeholder="Freq." class="form-control">   

                    </div>
                    <div class="col-md-4">
                        <input type="text" name="tipoativ" placeholder="Qual Tipo" class="form-control">   
                    </div>

                </div>


                <div class="row">
                    <div class="col-md-7">
                        <div class="inline">
                        <b style="margin-right: 5px;">Uso Anticoncepcional: </b>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="anticonceptivo" value="1" id="anticoncesim">
                                <label class="form-check-label" for="anticoncesim">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="anticonceptivo" value="0" id="anticoncenao">
                                <label class="form-check-label" for="anticoncenao">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <input type="text" name="qualconceptivo" placeholder="Qual" class="form-control">   
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7">
                         <b style="margin-right: 5px;">Data da Ultima Menstruação: </b>
                    </div>
                    <div class="col-md-5">
                        <input type="date" name="ultimamenst" id="ultimamenst" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7">
                        <div class="inline">
                            <b style="margin-right: 5px;">Gestante: </b>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gestante" value="1" id="gestantesim">
                                <label class="form-check-label" for="gestantesim">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gestante" value="0" id="gestantenao">
                                <label class="form-check-label" for="gestantenao">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <input type="text" name="tempogest" placeholder="Quanto Tempo?" class="form-control">   
                       
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7">
                        <div class="inline">
                        <b style="margin-right: 5px;">Gestações: </b>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gestacoes" value="1" id="gestsim">
                                <label class="form-check-label" for="gestsim">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gestacoes" value="0" id="gestnao">
                                <label class="form-check-label" for="gestnao">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                    <input type="text" name="qtngesta" placeholder="Quantas?" class="form-control">   

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7">
                        <div class="inline">
                        <b style="margin-right: 5px;">Trat Médico atual: </b>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tratmedico" value="1" id="tratmedsim">
                                <label class="form-check-label" for="tratmedsim">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tratmedico" value="0" id="tratmednao">
                                <label class="form-check-label" for="tratmednao">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                    <input type="text" name="medicamentos" placeholder="Medicam. em uso" class="form-control">   

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7">
                        <div class="inline">
                        <b style="margin-right: 5px;">Antecedentes Alérgicos: </b>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="antalergicos" value="1" id="alergsim">
                                <label class="form-check-label" for="alergsim">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="antalergicos" value="0" id="alergnao">
                                <label class="form-check-label" for="alergnao">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                    <input type="text" name="qualalerg" placeholder="Quais?" class="form-control">   

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="inline">
                        <b style="margin-right: 5px;">Possui marcapasso? </b>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="marcapasso" value="1" id="marcasim">
                                <label class="form-check-label" for="marcasim">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="marcapasso" value="0" id="marcanao">
                                <label class="form-check-label" for="marcanao">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7">
                        <div class="inline">
                        <b style="margin-right: 5px;">Alterações Cardiacas: </b>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="altcardiacas" value="1" id="altcardsim">
                                <label class="form-check-label" for="altcardsim">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="altcardiacas" value="0" id="altcardnao">
                                <label class="form-check-label" for="altcardnao">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                    <input type="text" name="qualcardiaca" placeholder="Quais?" class="form-control">   

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="inline">
                        <b style="margin-right: 5px;">Hipo/Hipertensão Arterial: </b>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="hipertarterial" value="1" id="hipertsim">
                                <label class="form-check-label" for="hipertsim">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="hipertarterial" value="0" id="hipertnao">
                                <label class="form-check-label" for="hipertnao">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7">
                        <div class="inline">
                        <b style="margin-right: 5px;">Disturbio Circulatório: </b>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="distcirculatorio" value="1" id="circsim">
                                <label class="form-check-label" for="circsim">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="distcirculatorio" value="0" id="circnao">
                                <label class="form-check-label" for="circnao">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                    <input type="text" name="qualdistcirc" placeholder="Qual?" class="form-control">   

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="inline">
                        <b style="margin-right: 5px;">Disturbio Renal: </b>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="distrenal" value="1" id="renalsim">
                                <label class="form-check-label" for="renalsim">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="distrenal" value="0" id="renalnao">
                                <label class="form-check-label" for="renalnao">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7">
                        <div class="inline">
                        <b style="margin-right: 5px;">Disturbio Hormonal: </b>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="disthormonal" value="1" id="hormosim">
                                <label class="form-check-label" for="hormosim">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="disthormonal" value="0" id="hormonao">
                                <label class="form-check-label" for="hormonao">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                    <input type="text" name="qualdisthorm" placeholder="Qual?" class="form-control">   

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7">
                        <div class="inline">
                        <b style="margin-right: 5px;">Disturbio Gastro-Intestinal: </b>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="distgastint" value="1" id="gastrosim">
                                <label class="form-check-label" for="gastrosim">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="distgastint" value="0" id="gastronao">
                                <label class="form-check-label" for="gastronao">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                    <input type="text" name="qualgastroint" placeholder="Qual?" class="form-control">   

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7">
                        <div class="inline">
                        <b style="margin-right: 5px;">Epilepsia - Convulsões: </b>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="epilepsia" value="1" id="epilesim">
                                <label class="form-check-label" for="epilesim">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="epilepsia" value="0" id="epilenao">
                                <label class="form-check-label" for="epilenao">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                    <input type="text" name="freqepile" placeholder="Frequencia?" class="form-control">   

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7">
                        <div class="inline">
                        <b style="margin-right: 5px;">Alt Psicologicas/Psiquicas: </b>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="psicologicas" value="1" id="psicosim">
                                <label class="form-check-label" for="psicosim">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="psicologicas" value="0" id="psiconao">
                                <label class="form-check-label" for="psiconaO">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                    <input type="text" name="qualpsico" placeholder="Quais?" class="form-control">   

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7">
                        <div class="inline">
                        <b style="margin-right: 5px;">Estresse: </b>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estresse" value="1" id="estressesim">
                                <label class="form-check-label" for="estressesim">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="estresse" value="0" id="estressenao">
                                <label class="form-check-label" for="estressenao">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                    <input type="text" name="obsestresse" placeholder="Obs" class="form-control">   

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7">
                        <div class="inline">
                        <b style="margin-right: 5px;">Antecedentes Oncológicos: </b>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="oncologicos" value="1" id="oncosim">
                                <label class="form-check-label" for="oncosim">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="oncologicos" value="0" id="onconao">
                                <label class="form-check-label" for="onconao">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                    <input type="text" name="qualonco" placeholder="Qual?" class="form-control">   

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7">
                        <div class="inline">
                        <b style="margin-right: 5px;">Diabetes: </b>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="diabetes" value="1" id="diabetesim">
                                <label class="form-check-label" for="diabetesim">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="diabetes" value="0" id="diabetesnao">
                                <label class="form-check-label" for="diabetesnao">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                    <input type="text" name="tipodiabete" placeholder="Tipo?" class="form-control">   

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7">
                        <div class="inline">
                        <b style="margin-right: 5px;">Algum Tipo Doença: </b>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tipodoenca" value="1" id="doencasim">
                                <label class="form-check-label" for="doencasim">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tipodoenca" value="0" id="doencanao">
                                <label class="form-check-label" for="doencanao">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                    <input type="text" name="qualtipodoenca" placeholder="Qual?" class="form-control">   

                    </div>
                </div>
                    <hr>
                <h5>TRATAMENTO DA MEDICINA ESTETICA E CIRURGICA</h5>

                <div class="row">
                    <div class="col-md-7">
                        <div class="inline">
                        <b style="margin-right: 5px;">Implante Dentário: </b>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="impdentario" value="1" id="dentsim">
                                <label class="form-check-label" for="dentsim">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="impdentario" value="0" id="dentnao">
                                <label class="form-check-label" for="dentnao">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                    <input type="text" name="qualimpdent" placeholder="Qual?" class="form-control">   

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7">
                        <div class="inline">
                        <b style="margin-right: 5px;">Trat Dermat/Estético: </b>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tratdermat" value="1" id="dermatsim">
                                <label class="form-check-label" for="dermatsim">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="tratdermat" value="0" id="dermatnao">
                                <label class="form-check-label" for="dermatnao">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                    <input type="text" name="qualdermat" placeholder="Qual?" class="form-control">   

                    </div>
                </div>


                <div class="row">
                    <div class="col-md-7">
                        <div class="inline">
                        <b style="margin-right: 5px;">Cirurgia Plástica Estética: </b>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="plasticaestetica" value="1" id="plastsim">
                                <label class="form-check-label" for="plastsim">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="plasticaestetica" value="0" id="plastnao">
                                <label class="form-check-label" for="plastnao">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <input type="text" name="qualplastica" placeholder="Qual?" class="form-control">  
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7">
                        <div class="inline">
                        <b style="margin-right: 5px;">Cirurgia Reparadora: </b>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cirurgiareparadora" value="1" id="cirrepsim">
                                <label class="form-check-label" for="cirrepsim">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="cirurgiareparadora" value="0" id="cirrepnao">
                                <label class="form-check-label" for="cirrepnao">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                    <input type="text" name="qualcirrep" placeholder="Qual?" class="form-control">   

                    </div>
                </div>

                <hr>
                <h5>AUTORIZAÇÃO</h5>
                <div class="row">
                    <div class="col-md-12">
                        <div class="inline">
                        <b style="margin-right: 5px;">Autorizo fotos para as midias sociais e para antes e depois. </b>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="autorizacao" value="1" id="autorizosim">
                                <label class="form-check-label" for="autorizosim">
                                    Sim
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="autorizacao" value="0" id="autorizonao">
                                <label class="form-check-label" for="autorizonao">
                                    Não
                                </label>
                            </div>
                        </div>
                    </div>

                </div>

        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Adicionar</button>
      </div>
      </form>
    </div>
  </div>
</div>