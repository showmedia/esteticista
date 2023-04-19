<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Agenda;
use App\Models\Cliente;
use App\Models\Itemcompra;

class Compra extends Model
{
    use HasFactory;
    
    public function agendas(){
        return $this->hasMany('App\Models\Agenda', 'compras_id');
    }
    public function cliente(){
        return $this->belongsTo('App\Models\Cliente', 'clientes_id');
    }
    public function items(){
        return $this->hasMany('App\Models\Itemcompra', 'compras_id');
    }
    public function pagamentos(){
        return $this->hasMany('App\Models\Pagamento', 'compras_id');
    }
}
