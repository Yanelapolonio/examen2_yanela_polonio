<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuidador_animal extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_cuidador',
        'id_animal'
    ];
    public function cuidador(){
        return $this->belongsTo(cuidador::class,'id_cuidador','id');
    }

    public function animal(){
        return $this->belongsTo(animaal::class,'id_animal','id');
    }
}
