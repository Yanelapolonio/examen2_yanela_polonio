<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class especie extends Model
{
    
    use HasFactory;
    protected $fillable = [
        'nombre',
        'cantidad',
    ];

    public function cuidador(){
        return $this->belongsTo(cuidador::class);
    }
    public function animal(){
        return $this->hasMany(animaal::class);
    }
    public function recinto(){
        return $this->hasOne(recinto::class);
    }
}
