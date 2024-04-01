<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class animaal extends Model
{
    use HasFactory;
    public function actividad (){
        return $this->belongsTo(actividad::class);
        
    }
    public function especie(){
        return $this->belongsTo(especie::class);
    }
    public function recinto(){
        return $this->belongsTo(recinto::class);
    }
    public function cuidador_animal() {
        return $this->hasMany(cuidador_animal::class,'id_cuidador');
    }

}
