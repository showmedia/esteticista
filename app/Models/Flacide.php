<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Anamnese;
use App\Models\Face;

class Flacide extends Model
{
    use HasFactory;

    public function anamnese() {
        return $this->belongsTo('App\Models\anamnese', 'anamneses_id');
    }

    public function facial() {
        return $this->belongsTo('App\Models\Face', 'faces_id');
    }
}
