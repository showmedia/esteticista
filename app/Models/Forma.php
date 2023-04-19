<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forma extends Model
{
    use HasFactory;

    public function pagamentos(){
        return $this->hasMany('App\Models\Pagamento', 'formas_id');
    }
}
