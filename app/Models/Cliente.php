<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Anamnese;
use App\Models\Face;
use App\Models\Geral;
use App\Models\Agenda;
use App\Models\Compra;

class Cliente extends Model
{
    use HasFactory;

    public function anamnese() {
        return $this->hasOne('App\Models\Anamnese', 'clientes_id');
    }
    public function facial() {
        return $this->hasOne('App\Models\Face', 'clientes_id');
    }
    public function endereco() {
        return $this->hasOne('App\Models\Endereco', 'clientes_id');
    }
    public function gerais() {
        return $this->hasMany('App\Models\Geral', 'clientes_id');
    }
    public function agendas() {
        return $this->hasMany('App\Models\Agenda', 'clientes_id');
    }
    public function compras() {
        return $this->hasMany('App\Models\Compra', 'clientes_id');
    }
}
