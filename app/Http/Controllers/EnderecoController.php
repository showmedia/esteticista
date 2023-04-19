<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endereco;
use App\Models\Cliente;

class EnderecoController extends Controller
{
    public function view($id){
        $cliente = Cliente::findOrFail($id);
        if(!$cliente->endereco){
            $endereco = new Endereco;
            $endereco->clientes_id = $id;
            $endereco->save();
        }
        $cliente = Cliente::findOrFail($id);
        return view('cliente.endereco', ['cliente' => $cliente]);
    }
    public function store($id, Request $request){
        $cliente = Cliente::findOrFail($id);

        $endereco = $cliente->endereco;

        $endereco->cep = $request->cep;
        $endereco->logradouro = $request->logradouro;
        $endereco->numero = $request->numero;
        $endereco->complemento = $request->complemento;
        $endereco->bairro = $request->bairro;
        $endereco->cidade = $request->cidade;
        $endereco->estado = $request->estado;
        
        $endereco->update();

        $cliente = Cliente::findOrFail($id);
        return redirect('/endereco/'.$id)->with('msg', 'Endereço cadastrado ou alterado!');
    }
}
