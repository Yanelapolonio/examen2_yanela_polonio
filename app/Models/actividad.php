<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actividad extends Model
{
    protected $fillable = [
        'nombre',
        'dia',
        'hora',
    ];
    use HasFactory;
    public function animaal(){
        return $this->hasMany(animaal::class);
    }
}
