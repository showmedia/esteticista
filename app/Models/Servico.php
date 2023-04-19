<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Itempacote;
use App\Models\Agenda;
use App\Models\Itemcompra;

class Servico extends Model
{
    use HasFactory;

    public function itempacote(){
        return $this->hasMany('App\Models\Itempacote', 'servicos_id');
    }
    public function agendas(){
        return $this->hasMany('App\Models\Agenda', 'servicos_id');
    }
    public function itemcompra(){
        return $this->hasMany('App\Models\Itemcompra', 'servicos_id');
    }
}
