<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;
use App\Models\Flacide;
use App\Models\Note;

class Face extends Model
{
    use HasFactory;

    protected $casts = [
        'involucao' => 'array',
        'manchas' => 'array',
        'alteracoes' => 'array',
        'lesoes' => 'array',
        'cicatriz' => 'array',
        'pelos' => 'array',
        
    ];


    public function cliente() {
        return $this->belongsTo('App\Models\Cliente', 'clientes_id');
    }
    public function flacidez() {
        return $this->hasOne('App\Models\Flacide', 'faces_id');
    }
    public function notes() {
        return $this->hasMany('App\Models\Note', 'faces_id');
    }
}
