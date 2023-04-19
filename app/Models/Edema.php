<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Anamnese;

class Edema extends Model
{
    use HasFactory;

    public function anamnese() {
        return $this->belongsTo('App\Models\anamnese', 'anamneses_id');
    }
}
