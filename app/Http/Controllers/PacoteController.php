<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pacote;
use App\Models\Servico;
use App\Models\Itempacote;

class PacoteController extends Controller
{
    public function list(){
        $search = request('search');
        if($search){
            $pacotes = Pacote::where([
                ['description', 'like', '%'.$search.'%']
            ])->get();
        }else{
            $pacotes = Pacote::all();

        }
        return view('pacote.list', ['pacotes' => $pacotes]);
    }
    public function create(){
        return view('pacote.create');
    }
    public function store(Request $request){
        $pacote = new Pacote;
        $pacote->description = $request->description;
        $pacote->validade = $request->validade;
        $valor = str_replace('.','',$request->valor);
        $valor = str_replace(',','.',$valor);
        $pacote->valor = $valor;
        $pacote->save();
        return redirect('/pacote/'.$pacote->id)->with('msg', 'Adicione os serviços que contem nesse pacote!');
    }
    public function show($id){
        $pacote = Pacote::findOrFail($id);
        $servicos = Servico::all();
        return view('pacote.show', ['pacote' => $pacote, 'servicos' => $servicos]);
    }
    public function edit($id){
        $pacote = Pacote::findOrFail($id);
        return view('pacote.edit', ['pacote' => $pacote]);
    }
    public function update($id, Request $request){
        $pacote = Pacote::findOrFail($id);
        $pacote->description = $request->description;
        $pacote->validade = $request->validade;
        $valor = str_replace('.','',$request->valor);
        $valor = str_replace(',','.',$valor);
        $pacote->valor = $valor;
        $pacote->update();
        return redirect('/pacote/'.$pacote->id);
    }
    public function add($id, Request $request){
        $pacote = Pacote::findOrFail($id);
        $item = new Itempacote;
        $item->quantidade = $request->quantidade;
        $item->servicos_id = $request->servico;
        $item->pacotes_id = $id;
        $item->save();
        return redirect('/pacote/'.$pacote->id);
    }
    public function remove($id, $item_id){
        $item = Itempacote::findOrFail($item_id);
        $item->delete();
        return redirect('/pacote/'.$id)->with('msg', 'Item deletado!');
    }
}
