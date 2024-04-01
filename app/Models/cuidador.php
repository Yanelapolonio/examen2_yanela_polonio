<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuidador extends Model
{
    
    use HasFactory;
        protected $fillable = [
        'nombre',
        'telefoni',
        'direccion',
    ];
    public function cuidador_animal() {
        return $this->hasMany(cuidador_animal::class,'id_cuidador');
    }
    public function especie(){
        return $this->hasMany(especie::class);
    }
}
