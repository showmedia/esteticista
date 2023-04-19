<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    use HasFactory;

    public function compra(){
        return $this->belongsTo('App\Models\Compra', 'compras_id');
    }
    public function forma(){
        return $this->belongsTo('App\Models\Forma', 'formas_id');
    }
}
