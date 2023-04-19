<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;

class Endereco extends Model
{
    use HasFactory;

    public function cliente() {
        return $this->belongsTo('App\Models\Cliente', 'clientes_id');
    }
}
