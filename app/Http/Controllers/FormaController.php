<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forma;

class FormaController extends Controller
{
    public function create(){
        return view('forma.create');
    }

    public function list(){
        $formas = Forma::all();
        return view('forma.list', ['formas' => $formas]);
    }

    public function edit($id){
        $forma = Forma::findOrFail($id);
        return view('forma.edit', ['forma' => $forma]);
    }

    public function update($id, Request $request){
        $forma = Forma::FindOrFail($id);
        $forma->description = $request->description;

        $valor = str_replace(',','.',$request->taxa);
        $forma->taxa = $valor;
        $forma->update();

        return redirect('/formas')->with('msg','Forma de Pagamenco Alterada!');
        
    }

    public function store(Request $request){
        $forma = new Forma;
        $forma->description = $request->description;

        $valor = str_replace(',','.',$request->taxa);
        $forma->taxa = $valor;

        $forma->save();
        return redirect('/formas')->with('msg','Forma de Pagamenco Cadastrada!');
    }
}
