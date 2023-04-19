<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Face;
use App\Models\Flacide;

class FaceController extends Controller
{
       public function show($id){
            $cliente = Cliente::findOrFail($id);
            if(!$cliente->facial){
                $facial = new Face;
                $facial->clientes_id = $id;
                $facial->save();
            }
            $cliente = Cliente::findOrFail($id);
            return view('cliente.facial.show', ['cliente' => $cliente]);
       }
       public function create($id){
        $cliente = Cliente::findOrFail($id);
        return view('cliente.facial.create', ['cliente' => $cliente]);
       }
       public function store($id, Request $request){
        $cliente = Cliente::findOrFail($id);
        $facial = Face::findOrFail($cliente->facial->id);
        $facial->biotipo = $request->biotipo;
        $facial->estado = $request->estado;
        $facial->textura = $request->textura;
        $facial->espessura = $request->espessura;
        $facial->ostio = $request->ostio;
        $facial->acne = $request->acne;
        $facial->cor = $request->cor;
        $facial->involucao = $request->involucao;
        $facial->local = $request->localinvolucao;
        $facial->fototipo = $request->fototipo;
        $facial->fotoenvelhecimento = $request->fotoenvelhecimento;
        $facial->obsfotoenv = $request->obsfotoenv;
        $facial->manchas = $request->melanina;
        $facial->alteracoes = $request->vasculares;
        $facial->lesoes = $request->lesoes;
        $facial->cicatriz = $request->cicatriz;
        $facial->pelos = $request->pelos;
        $facial->olheiras = $request->olheiras;
        $facial->tipoolheira = $request->tipoolheira;

        $flacidez = new Flacide;
        $flacidez->faces_id = $facial->id;
        $flacidez->tissular = $request->boolean('tissular');
        $flacidez->muscular = $request->boolean('muscular');
        $flacidez->ltissular = $request->ltissular;
        $flacidez->lmuscular = $request->lmuscular;

        $facial->objetivo = $request->objetivo;
        $facial->tratamento =$request->tratamento;
      
        $flacidez->save();

        $facial->update();

        return redirect('/facial/'.$id)->with('msg', 'Ficha Facial Preenchida');
        
       }
       public function edit($id){
        $cliente = Cliente::findOrFail($id);
        return view('cliente.facial.edit', ['cliente' => $cliente]);
       }
       public function update($id, Request $request){
        $facial = Face::findOrFail($id);
        $facial->biotipo = $request->biotipo;
        $facial->estado = $request->estado;
        $facial->textura = $request->textura;
        $facial->espessura = $request->espessura;
        $facial->ostio = $request->ostio;
        $facial->acne = $request->acne;
        $facial->cor = $request->cor;
        $facial->involucao = $request->involucao;
        $facial->local = $request->localinvolucao;
        $facial->fototipo = $request->fototipo;
        $facial->fotoenvelhecimento = $request->fotoenvelhecimento;
        $facial->obsfotoenv = $request->obsfotoenv;
        $facial->manchas = $request->melanina;
        $facial->alteracoes = $request->vasculares;
        $facial->lesoes = $request->lesoes;
        $facial->cicatriz = $request->cicatriz;
        $facial->pelos = $request->pelos;
        $facial->olheiras = $request->olheiras;
        $facial->tipoolheira = $request->tipoolheira;
        $facial->flacidez->tissular = $request->boolean('tissular');
        $facial->flacidez->muscular = $request->boolean('muscular');
        $facial->flacidez->ltissular = $request->ltissular;
        $facial->flacidez->lmuscular = $request->lmuscular;

        $facial->objetivo = $request->objetivo;
        $facial->tratamento =$request->tratamento;

        $facial->update();

        return redirect('/facial/'.$facial->cliente->id)->with('msg', 'Ficha Facial Editada!');
       }
}
