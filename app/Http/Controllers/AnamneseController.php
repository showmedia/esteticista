<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Anamnese;
use App\Models\Edema;
use App\Models\Flacide;
use App\Models\Hidroli;
use App\Models\Lipodistrofia;
use App\Models\Perimetria;
use App\Models\Adipometria;

class AnamneseController extends Controller
{
    public function show($id){
        $cliente = Cliente::findOrFail($id);
        if(!$cliente->anamnese){
            $anamnese = new Anamnese;
            $anamnese->clientes_id = $id;
            $anamnese->save();
        }
        $cliente = Cliente::findOrFail($id);
        return view('cliente.anamnese.show', ['cliente' => $cliente]);
    }
    public function create($id){
        $cliente = Cliente::findOrFail($id);
        return view('cliente.anamnese.create', ['cliente' => $cliente]);
    }
    public function edit($id){
        $cliente = Cliente::findOrFail($id);
        return view('cliente.anamnese.edit', ['cliente' => $cliente]);
    }
    public function store($id, Request $request){
        $cliente = Cliente::findOrFail($id);
        $anamnese_id = $cliente->anamnese->id;
        
        $edema = new Edema;
        $flacidez = new Flacide;
        $hidroli = new Hidroli;
        $lipodistrofia = new Lipodistrofia;
        
        $edema->anamneses_id = $anamnese_id;
        $flacidez->anamneses_id = $anamnese_id;
        $hidroli->anamneses_id = $anamnese_id;
        $lipodistrofia->anamneses_id = $anamnese_id;

        $hidroli->tipo = $request->tipo;
        $hidroli->grau = $request->grau;

        $edema->cacifo = $request->cacifo;
        $edema->pressao = $request->pressao;
        $edema->sensacao = $request->cansaco;

        $lipodistrofia->gordura = $request->gordura;
        $lipodistrofia->distribuicao = $request->distgordura;
        $lipodistrofia->localizacao = $request->localizacao;
        $lipodistrofia->biotipo = $request->biotipo;
        $lipodistrofia->peso = str_replace(',','.',$request->peso);
        $lipodistrofia->altura = str_replace(',','.',$request->altura); 
        $lipodistrofia->ideal = str_replace(',','.',$request->ideal);

        $flacidez->tissular = $request->boolean('tissular');
        $flacidez->muscular = $request->boolean('muscular');
        $flacidez->ltissular = $request->ltissular;
        $flacidez->lmuscular = $request->lmuscular;

        $hidroli->save();
        $edema->save();
        $lipodistrofia->save();
        $flacidez->save();

        return redirect('/anamnese/'.$id)->with('msg', 'Ficha de Anamnese Corporal preenchida');
    }
    public function update($id, Request $request){
        $cliente = Cliente::findOrFail($id);

        $cliente->anamnese->hidroli->tipo = $request->tipo;
        $cliente->anamnese->hidroli->grau = $request->grau;

        $cliente->anamnese->edema->cacifo = $request->cacifo;
        $cliente->anamnese->edema->pressao = $request->pressao;
        $cliente->anamnese->edema->sensacao = $request->cansaco;

        $cliente->anamnese->lipodistrofia->gordura = $request->gordura;
        $cliente->anamnese->lipodistrofia->distribuicao = $request->distgordura;
        $cliente->anamnese->lipodistrofia->localizacao = $request->localizacao;
        $cliente->anamnese->lipodistrofia->biotipo = $request->biotipo;
        $cliente->anamnese->lipodistrofia->peso = str_replace(',','.',$request->peso);
        $cliente->anamnese->lipodistrofia->altura = str_replace(',','.',$request->altura); 
        $cliente->anamnese->lipodistrofia->ideal = str_replace(',','.',$request->ideal);

        $cliente->anamnese->flacidez->tissular = $request->boolean('tissular');
        $cliente->anamnese->flacidez->muscular = $request->boolean('muscular');
        $cliente->anamnese->flacidez->ltissular = $request->ltissular;
        $cliente->anamnese->flacidez->lmuscular = $request->lmuscular;

        $cliente->anamnese->hidroli->save();
        $cliente->anamnese->edema->save();
        $cliente->anamnese->lipodistrofia->save();
        $cliente->anamnese->flacidez->save();

        return redirect('/anamnese/'.$id)->with('msg', 'Ficha de Anamnese Corporal preenchida');
    }

    public function addPerimetria($id, Request $request){
        $cliente = Cliente::findOrFail($id);
        $perimetria = new Perimetria;
        if(is_null($request->bracod)){
            $perimetria->bracod = null;
        }else{
            $perimetria->bracod = str_replace(',','.',$request->bracod);
        }
        $perimetria->bracoe = str_replace(',','.',$request->bracoe);
        $perimetria->abdinf = str_replace(',','.',$request->abdinf);
        $perimetria->abdsup = str_replace(',','.',$request->abdsup);
        $perimetria->cintura = str_replace(',','.',$request->cintura);
        $perimetria->quadril = str_replace(',','.',$request->quadril);
        $perimetria->coxainfe = str_replace(',','.',$request->coxainfesquerda);
        $perimetria->coxainfd = str_replace(',','.',$request->coxainfdireita);
        $perimetria->coxasupd = str_replace(',','.',$request->coxasupdireita);
        $perimetria->coxasupe = str_replace(',','.',$request->coxasupesquerda);
        $perimetria->joelhod = str_replace(',','.',$request->joelhodireito);
        $perimetria->joelhoe = str_replace(',','.',$request->joelhoesquerdo);
        $perimetria->anamneses_id = $cliente->anamnese->id;

        $perimetria->save();

        return redirect('/anamnese/'.$id)->with('msg', 'Perimetria adicionado!');
    }
    public function updatePerimetria($id, Request $request){
        $perimetria = Perimetria::findOrFail($id);

        $perimetria->bracod = str_replace(',','.',$request->bracod);
        $perimetria->bracoe = str_replace(',','.',$request->bracoe);
        $perimetria->abdinf = str_replace(',','.',$request->abdinf);
        $perimetria->abdsup = str_replace(',','.',$request->abdsup);
        $perimetria->cintura = str_replace(',','.',$request->cintura);
        $perimetria->quadril = str_replace(',','.',$request->quadril);
        $perimetria->coxainfe = str_replace(',','.',$request->coxainfesquerda);
        $perimetria->coxainfd = str_replace(',','.',$request->coxainfdireita);
        $perimetria->coxasupd = str_replace(',','.',$request->coxasupdireita);
        $perimetria->coxasupe = str_replace(',','.',$request->coxasupesquerda);
        $perimetria->joelhod = str_replace(',','.',$request->joelhodireito);
        $perimetria->joelhoe = str_replace(',','.',$request->joelhoesquerdo);

        $perimetria->update();
        return redirect('/anamnese/'.$perimetria->anamnese->id)->with('msg', 'Perimetria alterada!');
    }
    public function addAdipometria($id, Request $request){
        $cliente = Cliente::findOrFail($id);
        $adipometria = new Adipometria;
        $adipometria->regiao = $request->regiao;
        $adipometria->prega = str_replace(',','.',$request->prega);
        $adipometria->anamneses_id = $cliente->anamnese->id;
        $adipometria->save();
        return redirect('/anamnese/'.$cliente->anamnese->id)->with('msg', 'Adipometria adicionada');
    }
    public function updateAdipometria($id, Request $request){
        $adipometria = Adipometria::findOrFail($id);
        $adipometria->regiao = $request->regiao;
        $adipometria->prega = str_replace(',','.',$request->prega);
        $adipometria->update();
        return redirect('/anamnese/'.$adipometria->anamnese->id)->with('msg', 'Alteração Salva');
    }
}
