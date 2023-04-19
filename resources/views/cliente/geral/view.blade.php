@extends('.layouts.main')

@section('content')

@if($ficha->assinatura == null)

    <div class="assinar"  style="width:100%; margin: 10px 30px; padding: 30px 100px;">


        <h5>Assinatura de Ficha Anamnese</h5>

        <p>Eu declaro ter sido informado (a) claramente sobre o meu procedimento. Estou ciente sabre todos os beneficios e riscos.  As indicações, contra-indicações, principais efeitos colaterais e advertencias gerais relacionadas   ao tratamento. Me comprometo-me a seguir todas as orientações e a fazer uso de todos os produtos contidos em minha prescrição domiciliar. As declarações acima são verdadeiras, nao cabendo ao profissional a responsabilidade de informavores omitidas.</p>
    
    <br>
    <br>
    <div>

<div style="margin:auto; width: 500px; text-align:center;">
<canvas width="500" height="200" id="signature-pad"></canvas>
<form method="POST" action="/assinatura/{{$ficha->id}}" id="form">
    @csrf
    <input type="hidden" name="assinatura" value="teste" id="assinatura">
    <button type="button" class="btn btn-secondary" onclick="signaturePad.clear()">Limpar</button>
    <button type="submit" class="btn btn-primary">Assinar</button>
</form>
</div>
</div>
    
    </div>

    
    

    

@else 

<div class="fichaanamnese">

                 <img src="/img/logo.png" class="img-logo">


    <h5> Ficha Anamnese</h5>

    <h6> {{$ficha->cliente->name ?? ''}} - {{$ficha->cliente->profissao ?? ''}} </h6>

    <p>
        <li><b>Queixa Principal: </b> {{$ficha->queixa ?? ''}} <br> </li>
        <br>
        <h6>Hábitos Diários</h6>
        <li><b>Tratamento Médico Anterior: </b> {{$ficha->tratanterior ? 'Sim' : 'Não'}} - {{$ficha->qualtrata ?? ''}} <br></li>
        <li><b>Usa Lentes de Contato: </b> {{$ficha->lentescontato ? 'Sim' : 'Não'}} <br></li>
        <li><b>Utilização de Cosméticos: </b> {{$ficha->utilcosmeticos ? 'Sim' : 'Não'}} - {{$ficha->qualcosmeticos ?? ''}} <br></li>
        <li><b>Exposição ao Sol: </b> {{$ficha->exposol ? 'Sim' : 'Não'}} | <b>Filtro Solar: </b> {{$ficha->filtrosolar ? 'Sim' : 'Não'}} - {{$ficha->freqfiltro ?? ''}} <br></li>
        <li><b>Tabagismo: </b> {{$ficha->tabagismo ? 'Sim' : 'Não'}} | <b>Quantidade de cigarros por Dia:</b> {{$ficha->qtncigarrosdia ?? '0'}} <br></li>
        <li> <b>Ingere Bebida Alcoólica: </b> {{$ficha->ingerebebida ? 'Sim' : 'Não'}} | <b>Frequencia: </b> {{$ficha->freqbebida ?? ''}} <br></li>
        <li> <b>Funcionamento Intestinal: </b> {{$ficha->funcintestinal ?? 'Sem resposta'}} <br></li>
        <li><b>Qualidade do Sono: </b> {{$qualsono ?? 'Sem resposta'}} | <b>Quantas horas / noite: </b> {{$ficha->horasnoite ?? ''}} <br></li>
        <li>  <b>Ingestão de água (copos / dia): </b> {{$ficha->ingagua ?? ''}} | <b>Alimentação: </b> {{$ficha->alimentacao ?? ''}} <br></li>
        <li>  <b>Alimentos de Preferência: </b> {{$ficha->alimpref ?? ''}} | <b>Pratica Atividade Física?</b> {{$ficha->ativfisica ? 'Sim' : 'Não'}} <br></li>
        <li> <b>Tipo Atividade: </b> {{$ficha->tipoativ ?? ''}} | <b>Frequência: </b> {{$ficha->freqativ ?? ''}} <br></li>
        <li> <b>Uso de Anticoncepcional: </b> {{$ficha->anticonceptivo ? 'Sim' : 'Não'}} - {{$ficha->qualconceptivo ?? ''}} <br></li>
        <li> <b>Data do Primeiro dia da Última Menstruação: </b> {{date('d/m/y',strtotime($ficha->ultimamenst))}} | <b>Gestante:</b> {{$ficha->gestante ? 'Sim' : 'Não'}} <br></li>
        <li> <b>Gestações: </b> {{$ficha->gestacoes ? 'Sim' : 'Não'}} | <b>Quantas: </b> {{$ficha->qtngesta ?? ''}} <br></li>
        <br>
        <h6>Histórico Clínico</h6>
        <li> <b>Tratamento Médico Atual: </b> {{$ficha->tratmedico ? 'Sim' : 'Não'}} | <b>Medicamentos em uso: </b> {{$ficha->medicamentos ?? ''}} <br></li>
        <li> <b>Antecedentes Alérgicos: </b> {{$ficha->antalergicos ? 'Sim' : 'Não'}} - {{$ficha->qualalerg ?? ''}} <br></li>
        <li> <b>Portador de Marcapasso: </b> {{$ficha->portmarcapasso ? 'Sim' : 'Não'}} <br></li>
        <li><b>Alterações Cardiacas: </b> {{$ficha->altcardiacas ? 'Sim' : 'Não'}} - {{$ficha->qualcard ?? ''}} <br></li>
        <li><b>Hipo/Hipertensão Arterial: </b> {{$ficha->hipertarterial ? 'Sim' : 'Não'}} <br></li>
        <li><b>Distúrbio Circulatório: </b> {{$ficha->distcirculatorio ? 'Sim' : 'Não'}} - {{$ficha->qualdistcirc ?? ''}} | <b>Disturbio Renal: </b> {{$ficha->distrenal ? 'Sim' : 'Não'}} <br></li>
        <li><b>Distúrbio Hormonal: </b> {{$ficha->disthormonal ? 'Sim' : 'Não'}} - {{$ficha->qualdisthormonal ?? ''}} <br></li>
        <li><b>Distúrbio Gastro Intestinal: </b> {{$ficha->distgastrointest ? 'Sim' : 'Não'}} - {{$ficha->qualdistgastro ?? ''}} <br></li>
        <li> <b>Epilepsia | Convulsões: </b> {{$ficha->eplepsia ? 'Sim' : 'Não'}} | <b>Frequência: </b> {{$ficha->freqeplepsia ?? ''}} <br></li>
        <li> <b>Alterações Psicológicas | Psiquiatricas: </b> {{$ficha->psicologicas ? 'Sim' : 'Não'}} - {{$ficha->quaispsicologicas ?? ''}} <br></li>
        <li> <b>Estresse: </b> {{$ficha->estresse ? 'Sim' : 'Não'}} | <b>Obs: </b> {{$ficha->obsestresse ?? ''}} <br></li>
        <li> <b>Antecedentes Oncológicos: </b> {{$ficha->antoncologicos ? 'Sim' : 'Não'}} - {{$ficha->qualoncologicos ?? ''}} <br> </li>
        <li> <b>Diabetes: </b> {{$ficha->diabetes ? 'Sim' : 'Não'}} - {{$ficha->qualdiabetes ?? ''}} <br> </li>
        <li> <b>Algum Tipo de Doença: </b> {{$ficha->tipodoenca ? 'Sim' : 'Não'}} - {{$ficha->qualdoenca ?? ''}} <br> </li>
        <br>
        <h6>Tratamento da Medicina Estética e Cirúrgica</h6>

        <li><b>Implante Dentário: </b> {{$ficha->impdentario ? 'Sim' : 'Não'}} | <b>Tipo: </b> {{$ficha->qualimpdentario ?? ''}} <br> </li>
        <li><b>Tratamentos Dermatologicos / Estético: </b> {{$ficha->tratderma ? 'Sim' : 'Não'}} - {{$ficha->qualtratderma ?? ''}} <br> </li>
        <li><b>Cirurgia Plástica Estética: </b> {{$ficha->cirurgplastica ? 'Sim' : 'Não'}} - {{$ficha->qualcirur ?? ''}} <br> </li>
        <li><b>Cirurgia Reparadora: </b> {{$ficha->cirurgiareparadora ? 'Sim' : 'Não'}} - {{$ficha->qualcirurgreparadora ?? ''}} <br></li>

    </p>
<br>
    <h6>Termo de Responsabilidade</h6>

    <p style="text-align:justify;"> Eu, <b> {{$ficha->cliente->name ?? ''}} </b> declaro ter sido informado(a) claramente sobre o meu procedimento. Estou ciente sabre todos os beneficios e riscos.  As indicações, contra-indicações, principais efeitos colaterais e advertencias gerais relacionadas   ao tratamento. Me comprometo-me a seguir todas as orientações e a fazer uso de todos os produtos contidos em minha prescrição domiciliar. As declarações acima são verdadeiras, nao cabendo ao profissional a responsabilidade de informavores omitidas. <br> <br>

    <b>Autorizo fotos para as midias sociais e para antes e depois: </b> {{$ficha->autorizacao ? 'Sim' : 'Não'}}

    </p>

<div style="width:100%;">
<div class="overlay" style="background-image: url({{ $ficha->assinatura }}"></div>
</div>

<div style="width:100%;">
    <div style="width: 100%; text-align:center;"> <h6> {{$ficha->cliente->name}} </h6>  </div>
</div>

</div>

@endif

@endsection