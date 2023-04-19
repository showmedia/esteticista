<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pacote;
use App\Models\Servico;

class Itempacote extends Model
{
    use HasFactory;

    public function servico(){
        return $this->belongsTo('App\Models\Servico', 'servicos_id');
    }

    public function pacote(){
        return $this->belongsTo('App\Models\Pacote', 'pacotes_id');
    }
}
