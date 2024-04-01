<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recinto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'tamaño',
    ];

    public function especie(){
        return $this->hasOne(especie::class);
    }
    public function animal(){
        return $this->hasMany(animaal::class);
    }
}
