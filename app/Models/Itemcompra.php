<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Compra;
use App\Models\Servico;
use App\Models\Pacote;

class Itemcompra extends Model
{   
    use HasFactory;
    
    public function compra(){
        return $this->belongsTo('App\Models\Compra', 'compras_id');
    }
    public function servico(){
        return $this->belongsTo('App\Models\Servico', 'servicos_id');
    }
    public function pacote(){
        return $this->belongsTo('App\Models\Pacote', 'pacotes_id');
    }
}
