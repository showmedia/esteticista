<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;
use App\Models\Servico;

class Agenda extends Model
{
    use HasFactory;

    public function cliente(){
        return $this->belongsTo('App\Models\Cliente', 'clientes_id');
    }
    public function servico(){
        return $this->belongsTo('App\Models\Servico', 'servicos_id');
    }
    public function compra() {
        return $this->belongsTo('App\Models\Compra', 'compras_id');
    }
}
