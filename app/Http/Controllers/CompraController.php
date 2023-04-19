<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Compra;
use App\Models\Servico;
use App\Models\Pacote;
use App\Models\Itemcompra;
use App\Models\Forma;
use App\Models\Pagamento;

class CompraController extends Controller
{
    public function show($id){
        if($id != 0){
            $compra = Compra::findOrFail($id);
            $cliente = $compra->cliente;
        }else{
            $compra = null;
        }
        $cliente_id = request('cliente_id');
        if($cliente_id){
            $cliente = Cliente::findOrFail($cliente_id);
        }
        $servicos = Servico::all();
        $pacotes = Pacote::all();
        $formas = Forma::all();
        return view('compra.show', ['formas'=>$formas,'servicos' => $servicos, 'pacotes' => $pacotes,'compra' => $compra, 'cliente' => $cliente]);
    }
    public function addservico($id, Request $request){
        if($id == 0){
            $compra = new compra;
            $compra->clientes_id = request('cliente_id');
            $compra->save();
        }else{
            $compra = Compra::findOrFail($id);
        }
            $servico = Servico::findOrFail($request->servico);
            $itemcompra = new Itemcompra;
            $itemcompra->compras_id = $compra->id;
            $itemcompra->quantidade = $request->quantidade;
            $itemcompra->servicos_id = $servico->id;
            $itemcompra->valorunitario = $servico->valor;
            $itemcompra->valortotal = $servico->valor * $request->quantidade;
            $itemcompra->save();
            $compra->valor += $itemcompra->valortotal;
            $compra->update();
            return redirect('/compra/'.$compra->id);
    }
    public function addpacote($id, Request $request){
        if($id == 0){
            $compra = new compra;
            $compra->clientes_id = request('cliente_id');
            $compra->save();
        }else{
            $compra = Compra::findOrFail($id);
        }
            $pacote = Pacote::findOrFail($request->pacote);
            $itemcompra = new Itemcompra;
            $itemcompra->compras_id = $compra->id;
            $itemcompra->quantidade = $request->quantidade;
            $itemcompra->pacotes_id = $pacote->id;
            $itemcompra->valorunitario = $pacote->valor;
            $itemcompra->valortotal = $pacote->valor * $request->quantidade;
            $itemcompra->save();
            $compra->valor += $itemcompra->valortotal;
            $compra->update();
            return redirect('/compra/'.$compra->id);
    }
    public function addpagto($id, Request $request){
        $compra = Compra::findOrFail($id);
        $pagamento = new Pagamento;
        $pagamento->compras_id = $compra->id;
        $pagamento->valor = $request->valor;
        $pagamento->formas_id = $request->forma;
        $forma = Forma::findOrFail($id);
        $pagamento->taxa = $forma->taxa;

        if($forma->description == 'Cartão de Crédito'){
            $pagamento->description = $request->parcelas. ' X R$'. number_format($request->parcelas,2,',','.');
            $pagamento->taxa = $request->taxa;
        }
        $compra->pago += $pagamento->valor;
        $pagamento->save();
        $compra->update();
       return redirect('/compra/'.$id);
    }

    public function deletar($tipo, $id){
        
        if($tipo == 1){
            $itemcompra = Itemcompra::findOrFail($id);
            $compra = $itemcompra->compra;
            $compra->valor -= $itemcompra->valortotal;
            $itemcompra->delete();
        }else if($tipo == 2){
            $pagamento = Pagamento::findOrFail($id);
            $compra = $pagamento->compra;
            $compra->pago -= $pagamento->valor;
            $pagamento->delete();
        }
        $compra->update();
        return redirect('/compra/'.$compra->id)->with('msg', 'Deletado!');
    }
}
