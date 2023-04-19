<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function create(){
        return view('cliente.create');
    }
    public function store(Request $request){
        $cliente = new Cliente;
        $cliente->name = $request->name;
        $cliente->telefone = $request->telefone;
        $cliente->email = $request->email;
        $cliente->cpf = $request->cpf;
        $cliente->rg = $request->rg;
        $cliente->datanascimento = $request->datanascimento;
        $cliente->save();
        return redirect('cliente/'.$cliente->id)->with('msg', 'Cliente cadastrado!');
    }
    public function list(){
        $search = request('search');
        if($search) {
            $clientes = Cliente::where([
                ['name', 'like', '%'.$search.'%']
            ])->orWhere([
                ['telefone', 'like', '%'.$search.'%']
            ])->orWhere([
                ['email', 'like', '%'.$search.'%']
            ])->get();
            if(count($clientes) == 1){
                $cliente = Cliente::where([
                    ['name', 'like', '%'.$search.'%']
                ])->orWhere([
                    ['telefone', 'like', '%'.$search.'%']
                ])->orWhere([
                    ['email', 'like', '%'.$search.'%']
                ])->first();
                return redirect('/cliente/'.$cliente->id);
            }
        } else {
            $clientes = Cliente::get();
        }
        return view('cliente.list', ['clientes' => $clientes]);
    }
    public function show($id){
        $cliente = Cliente::findOrFail($id);
        return view('cliente.cliente', ['cliente' => $cliente]);
    }
    public function edit($id){
        $cliente = Cliente::findOrFail($id);
        return view('cliente.edit', ['cliente' => $cliente]);
    }
    public function update(Request $request, $id){
        $cliente = Cliente::findOrFail($id);

        $cliente->name = $request->name;
        $cliente->telefone = $request->telefone;
        $cliente->email = $request->email;
        $cliente->cpf = $request->cpf;
        $cliente->rg = $request->rg;
        $cliente->datanascimento = $request->datanascimento;

        $cliente->update();

        return redirect('cliente/'.$cliente->id)->with('msg', 'Dados alterado!');

    }
    public function assinatura(Request $request){
        return view('teste', ['assinatura' => $request->assinatura]);
    }
    public function addimage($id, Request $request){
        $cliente = Cliente::findOrFail($id);

        // Image upload

        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName().strtotime("now")).".".$extension;

            $request->image->move(public_path('img/perfil'), $imageName);

            $cliente->image = $imageName;
        }
        $cliente->update();
        return redirect('/cliente/'.$id)->with('msg', 'Imagem de perfil alterada');
    }
}
