<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\Servico;
use App\Models\Compra;
use App\Models\Itemcompra;

class AgendaController extends Controller
{
    public function store(Request $request){
        $dia = $request->dia;

        $agendas = Agenda::
        whereDate('inicio', '>=', $dia.' 00:00:00')
        ->whereDate('inicio', '<=', $dia.' 23:59:00')->orderBy('inicio')->get();

        

        $servico = Servico::findOrFail($request->servico);
        if(isset($request->servico2) && $request->servico2 != 0){
            $servico2 = Servico::findOrFail($request->servico2);
        }
        $horainicio = $request->hora;
        $inicio = \DateTime::createFromFormat("H:i", $horainicio);

        // Adicionar tempo em minutos
        $fim = clone $inicio;
        $fim->add(new \DateInterval("PT{$servico->tempo}M"));
        if(isset($servico2)){
            $fim2 = clone $inicio;
            $tempo = $servico2->tempo + $servico->tempo;
            $fim2->add(new \DateInterval("PT{$tempo}M"));
        }

        // Converter de volta para string
        $horarioFim = $fim->format("H:i");
        if(isset($servico2)){
            $horarioFim2 = $fim2->format("H:i");
        }

        $dataHoraInicio = new \DateTime($dia . ' ' . $horainicio.':00');
        $dataHoraFim = new \DateTime($dia . ' ' . $horarioFim.':00');
        if(isset($servico2)){
            $dataHoraFim2 = new \DateTime($dia . ' ' . $horarioFim2.':00');
        }

        // Formata os objetos DateTime no formato esperado pelo banco de dados
        $dataHoraInicioFormatada = $dataHoraInicio->format('Y-m-d H:i:s');
        $dataHoraFimFormatada = $dataHoraFim->format('Y-m-d H:i:s');
        if(isset($servico2)){
            $dataHoraFimFormatada2 = $dataHoraFim2->format('Y-m-d H:i:s');
        }

        foreach ($agendas as $agenda) {
            $inicioAgenda = strtotime($agenda->inicio);
            $fimAgenda = strtotime($agenda->fim);
            $inicioConsulta = strtotime($dataHoraInicioFormatada);
            if(isset($servico2)){
                $fimConsulta = strtotime($dataHoraFimFormatada2);
            }else{
               $fimConsulta = strtotime($dataHoraFimFormatada); 
            }
            
        
            if (($inicioConsulta >= $inicioAgenda && $inicioConsulta < $fimAgenda) || ($fimConsulta > $inicioAgenda && $fimConsulta <= $fimAgenda)) {
                // Horário já agendado, retorne um erro ou mensagem para o usuário informando que esse horário não está disponível
                return redirect('/')->with('msg', 'Este horário não esta disponível')->with('class', 'danger');
            }
        }
        
        $agenda = new Agenda;
        $agenda->clientes_id = $request->idcliente;
        $agenda->servicos_id = $request->servico;
        $agenda->inicio = $dataHoraInicioFormatada;
        $agenda->fim = $dataHoraFimFormatada;
        $agenda->save();
        
       if(isset($servico2)){
            $agenda = new Agenda;
        $agenda->clientes_id = $request->idcliente;
        $agenda->servicos_id = $request->servico2;
        $agenda->inicio = $dataHoraFimFormatada;
        $agenda->fim = $dataHoraFimFormatada2;
        $agenda->save();
       }
        return redirect('/agenda/'.$agenda->id)->with('msg','Horário agendado');
    }
    public function fecharagenda(Request $request){
        $dia = $request->dia;

        $agendas = Agenda::
        whereDate('inicio', '>=', $dia.' 00:00:00')
        ->whereDate('inicio', '<=', $dia.' 23:59:00')->orderBy('inicio')->get();
    
        $horainicio = $request->hora;
        $horafim = $request->horafim;

        $dataHoraInicio = new \DateTime($dia . ' ' . $horainicio.':00');
        $dataHoraFim = new \DateTime($dia . ' ' . $horafim.':00');

        // Formata os objetos DateTime no formato esperado pelo banco de dados
        $dataHoraInicioFormatada = $dataHoraInicio->format('Y-m-d H:i:s');
        $dataHoraFimFormatada = $dataHoraFim->format('Y-m-d H:i:s');

        foreach ($agendas as $agenda) {
            $inicioAgenda = strtotime($agenda->inicio);
            $fimAgenda = strtotime($agenda->fim);
            $inicioConsulta = strtotime($dataHoraInicioFormatada);
            $fimConsulta = strtotime($dataHoraFimFormatada);
        
            if (($inicioAgenda >= $inicioConsulta && $fimAgenda < $inicioConsulta) || ($inicioAgenda > $fimConsulta && $fimAgenda <= $fimConsulta)) {
                // Horário já agendado, retorne um erro ou mensagem para o usuário informando que esse horário não está disponível
                return redirect('/')->with('msg', 'Dentro deste horário existe agendas, verifique!')->with('class', 'danger');
            }
        }
        
        $agenda = new Agenda;
        $agenda->inicio = $dataHoraInicioFormatada;
        $agenda->fim = $dataHoraFimFormatada;
        $agenda->tipo = 1;
        $agenda->save();
        return redirect('/')->with('msg','Horário Fechado');
    }
    public function cancelaragenda($id){
        $agenda = Agenda::findOrFail($id);
        $agenda->delete();
        return redirect('/')->with('msg', 'Horário cancelado!');
    }
    public function show($id){
        $agenda = Agenda::findOrFail($id);
        if($agenda->cliente){
            
        
        $itemcompras = Itemcompra::join('compras', 'compras.id', '=', 'compras_id')
            ->where([
                ['itemcompras.servicos_id', $agenda->servico->id],
                ['compras.clientes_id', $agenda->cliente->id],
                ['compras.status', 1],
                
            ])->select('itemcompras.*')
        ->get();


        $itemcompras2 = Itemcompra::join('compras', 'compras.id', '=', 'compras_id')
            ->where([
                ['compras.clientes_id', $agenda->cliente->id],
                ['compras.status', 1],
                ['itemcompras.pacotes_id', '!=', null]
            ])->select('itemcompras.*')
        ->get();
        
    $itemcomprasArray = $itemcompras->toArray();
        foreach($itemcompras2 as $item){
            foreach($item->pacote->items as $it){
                if($it->servico->id == $agenda->servico->id){
                    array_push($itemcomprasArray, $item);
                }
            }
        }
        
        $resultadoFiltro = array_filter($itemcomprasArray, function($objeto) {
            return $objeto['usado'] < $objeto['quantidade'];
        });

    
        $itemcompras = Itemcompra::hydrate($resultadoFiltro);
        
        }else{
            $itemcompras = null;
        }
        return view('agenda.show', ['agenda' => $agenda, 'cliente' => $agenda->cliente, 'itemcompras' => $itemcompras]);
    }
    public function vincular($id, Request $request){
        $agenda = Agenda::findOrFail($id);
        $itemcompra = Itemcompra::findOrFail($request->compra);
        $agenda->compras_id = $itemcompra->compra->id;
        $agenda->update();
        return redirect('/agenda/'.$id)->with('msg', 'Compra vinculada a essa agenda');
    }
    public function executar($id, Request $request){
        $agenda = Agenda::findOrFail($id);
        $compra = $agenda->compra;
        foreach($compra->items as $item){
            
            if($agenda->servicos_id != null){
                 if($item->servicos_id != null && $item->servico->id == $agenda->servico->id){
                     $item->usado += 1;
                 }
            }else if($agenda->pacotes_id){
                if($item->pacotes_id != null && $item->pacote->id == $agenda->pacote->id){
                    $item->usado += 1;
                }
            }
           $item->update();
        }
        $agenda->status = 0;
        $agenda->update();
        return redirect('/cliente/'.$agenda->cliente->id);
    }
    public function cliente($id, Request $request){
        $agenda = Agenda::findOrFail($id);
        $agenda->clientes_id = $request->idcliente;
        $agenda->update();
        return redirect('/agenda/'.$id);
    }
}
