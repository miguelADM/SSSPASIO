<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClasificacionEjercicio extends Model
{
    use HasFactory;

    public function ejercicios()
    {
        return $this->belongsTo(Ejercicios::class,'id_clasificacion','id');
    }
}
