<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Anamnese;

class Perimetria extends Model
{
    use HasFactory;

    public function anamnese() {
        return $this->belongsTo('App\Models\Anamnese', 'anamneses_id');
    }
}
