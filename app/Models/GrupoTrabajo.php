<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GrupoTrabajo extends Model
{
    use HasFactory;

    //relacion con el modelo User
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
