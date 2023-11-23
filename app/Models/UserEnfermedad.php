<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEnfermedad extends Model
{
    use HasFactory;

    protected $table = 'user_enfermedad';

    public function enfermedad()
    {
        return $this->belongsTo(Enfermedades::class, 'id_enfermedad');
    }
}
