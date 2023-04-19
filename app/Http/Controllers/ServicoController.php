<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servico;

class ServicoController extends Controller
{
    public function list(){
        $search = request('search');
        if($search){
            $servicos = Servico::where([
                ['description', 'like', '%'.$search.'%']
            ])->get();
        }else{
            $servicos = Servico::all();
        }
        return view('servico.list', ['servicos' => $servicos]);
    }

    public function create(){
        return view('servico.create');
    }

    public function store(Request $request){
        $servico = new Servico;
        $servico->description = $request->description;
        $servico->tempo = $request->tempo;

        $valor = str_replace('.','',$request->valor);
        $valor = str_replace(',','.',$valor);
        $servico->valor = $valor;
        $servico->save();

        return redirect('/servicos')->with('msg','Serviço Cadastrado!');
    }

    public function edit($id, Request $request){
        $servico = Servico::findOrFail($id);
        return view('servico.edit', ['servico' => $servico]);
    }
    
    public function update($id, Request $request){
        $servico = Servico::findOrFail($id);
        $servico->description = $request->description;
        $servico->tempo = $request->tempo;

        $valor = str_replace('.','',$request->valor);
        $valor = str_replace(',','.',$valor);
        $servico->valor = $valor;
        $servico->update();

        return redirect('/servicos')->with('msg','Serviço Alterado!');

    }
}
