<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Itempacote;

class Pacote extends Model
{
    use HasFactory;

    public function items(){
        return $this->hasMany('App\Models\Itempacote', 'pacotes_id');
    }
    public function compras(){
        return $this->hasMany('App\Models\Itemcompra', 'pacotes_id');
    }
}
