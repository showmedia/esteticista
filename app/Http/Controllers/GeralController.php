<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Geral;

class GeralController extends Controller
{
    public function show($id){
        $cliente = Cliente::findOrFail($id);
        return view('cliente.geral.show', ['cliente' => $cliente]);
    }

    public function view($id){
        $ficha = Geral::findOrFail($id);
        return view('cliente.geral.view', ['ficha' => $ficha]);
    }
    
    public function whats($id, Request $request){
        
         $ficha = Geral::findOrFail($id);
        $num = str_replace("(","",$ficha->cliente->telefone);
        $num = str_replace(")","",$num);
        $num = str_replace("-",'',$num);
        $string = '
        Ola, '.$ficha->cliente->name.' tudo bem?
        
        Acesse o link abaixo para ter acesso a sua ficha de Anamnese
        Data: '. date('d/m/Y', strtotime($ficha->created_at)).' 
        
        https://esteticamarianandrade.com.br/geral/view/'.$ficha->id.'
        
        Qualquer duvida, estou a disposição.
        
        Mariana Andrade.
        Agradecemos a preferencia.';
        
        $texto = urlencode(utf8_encode($string));

        $link = 'https://api.whatsapp.com/send?phone=55'.$num.'&text='. 
        $texto;
            
        return redirect()->away($link);
    
    }

    public function assinatura($id, Request $request){
        $ficha = Geral::findOrFail($id);
        $ficha->assinatura = $request->assinatura;
        $ficha->update();
        return redirect('/geral/view/'.$id);
    }

    public function store($id, Request $request){
        $cliente = Cliente::findOrFail($id);
        $cliente->sexo = $request->sexo ?? 'Feminino';
        $cliente->profissao = $request->profissao;
        $cliente->estadocivil = $request->estadocivil;
        $cliente->update();
        $ficha = new Geral;
        $ficha->clientes_id = $id;
        $ficha->queixa = $request->queixa;
        $ficha->tratanterior = $request->tratanterior ?? 0;
        $ficha->qualtrata = $request->qualtrata;
        $ficha->lentescontato = $request->lentescontato ?? 0;
        $ficha->utilcosmeticos = $request->utilcosmeticos ?? 0;
        $ficha->qualcosmeticos = $request->qualcosmeticos;
        $ficha->exposol = $request->exposol ?? 0;
        $ficha->filtrosolar = $request->filtrosolar ?? 0;
        $ficha->freqfiltro = $request->freqfiltro;
        $ficha->tabagismo = $request->tabagismo ?? 0;
        $ficha->qtncigarrosdia = $request->qtncigarrosdia;
        $ficha->ingerebebida = $request->ingerebebida ?? 0;
        $ficha->freqbebida = $request->freqbebida;
        $ficha->funcintestinal = $request->funcintestinal ?? 0;
        $ficha->qualsono = $request->qualsono ?? 0;
        $ficha->horasnoite = $request->horasnoite;
        $ficha->ingagua = $request->ingagua ?? 0;
        $ficha->alimentacao = $request->alimentacao ?? 0;
        $ficha->alimpref = $request->alimpref;
        $ficha->ativfisica = $request->ativfisica ?? 0;
        $ficha->freqativ = $request->freqativ;
        $ficha->tipoativ = $request->tipoativ;
        $ficha->anticonceptivo = $request->anticonceptivo ?? 0;
        $ficha->qualconceptivo = $request->qualconceptivo;
        $ficha->ultimamenst = $request->ultimamenst;
        $ficha->gestante = $request->gestante ?? 0;
        $ficha->tempogest = $request->tempogest;
        $ficha->gestacoes = $request->gestacoes ?? 0;
        $ficha->qtngesta = $request->qtngesta;
        $ficha->tratmedico = $request->tratmedico ?? 0;
        $ficha->medicamentos = $request->medicamentos;
        $ficha->antalergicos = $request->antalergicos ?? 0;
        $ficha->qualalerg = $request->qualalerg;
        $ficha->portmarcapasso = $request->marcapasso ?? 0;
        $ficha->altcardiacas = $request->altcardiacas ?? 0;
        $ficha->qualcard = $request->qualcardiaca;
        $ficha->hipertarterial = $request->hipertarterial ?? 0;
        $ficha->distcirculatorio = $request->distcirculatorio ?? 0;
        $ficha->qualdistcirc = $request->qualdistcirc;
        $ficha->distrenal = $request->distrenal ?? 0;
        $ficha->disthormonal = $request->disthormonal ?? 0;
        $ficha->qualdisthormonal = $request->qualdisthorm ;
        $ficha->distgastrointest = $request->distgastint ?? 0;
        $ficha->qualdistgastro = $request->qualgastroint;
        $ficha->eplepsia = $request->epilepsia ?? 0;
        $ficha->freqeplepsia = $request->freqepile;
        $ficha->psicologicas = $request->psicologicas ?? 0;
        $ficha->quaispsicologicas = $request->qualpsico;
        $ficha->estresse = $request->estresse ?? 0;
        $ficha->obsestresse = $request->obsestresse;
        $ficha->antoncologicos = $request->oncologicos ?? 0;
        $ficha->qualantonco = $request->qualonco;
        $ficha->diabetes = $request->diabetes ?? 0;
        $ficha->qualdiabetes = $request->qualdiabete;
        $ficha->tipodoenca = $request->tipodoenca ?? 0;
        $ficha->qualdoenca = $request->qualtipodoenca;
        $ficha->impdentario = $request->impdentario ?? 0;
        $ficha->qualimpdentario = $request->qualimpdent;
        $ficha->tratderma = $request->tratdermat ?? 0;
        $ficha->qualtratderma = $request->qualdermat;
        $ficha->cirurgplastica = $request->plasticaestetica ?? 0;
        $ficha->qualcirur = $request->qualplastica;
        $ficha->cirurgreparadora = $request->cirurgiareparadora ?? 0;
        $ficha->qualcirurgreparadora = $request->qualcirrep;
        $ficha->autorizacao = $request->autorizacao ?? 1;
        $ficha->save();
        return redirect('/geral/view/'.$ficha->id)->with('msg','Ficha Anamnese Criada. Peça para a cliente assinar.');
    }
}
