<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;
use App\Models\Edema;
use App\Models\Hidroli;
use App\Models\Lipodistrofia;
use App\Models\Flacide;
use App\Models\Note;
use App\Models\Perimetria;
use App\Models\Adipometria;

class Anamnese extends Model
{
    use HasFactory;

    public function cliente() {
        return $this->belongsTo('App\Models\Cliente', 'clientes_id');
    }

    public function edema() {
        return $this->hasOne('App\Models\Edema', 'anamneses_id');
    }

    public function notes() {
        return $this->hasMany('App\Models\Note', 'anamneses_id');
    }

    public function perimetrias() {
        return $this->hasMany('App\Models\Perimetria', 'anamneses_id');
    }

    public function adipometrias() {
        return $this->hasMany('App\Models\Adipometria', 'anamneses_id');
    }

    public function hidroli() {
        return $this->hasOne('App\Models\Hidroli', 'anamneses_id');
    }

    public function lipodistrofia() {
        return $this->hasOne('App\Models\Lipodistrofia', 'anamneses_id');
    }

    public function flacidez() {
        return $this->hasOne('App\Models\Flacide', 'anamneses_id');
    }
}
