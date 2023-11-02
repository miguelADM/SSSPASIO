<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rutina extends Model
{
    use HasFactory;

    //relacion con el modelo User
    public function users()
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

}
