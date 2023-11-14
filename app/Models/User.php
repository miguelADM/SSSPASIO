<?php

namespace App\Models;

use App\Models\Enfermedades;
use App\Models\GrupoTrabajo;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //relacion con el modelo GrupoTrabajo
    public function GrupoTrabajo()
    {
        return $this->belongsToMany(GrupoTrabajo::class, 'grupo_trabajo_users','id_user','id_grupo_trabajo');
    }

    //relacion con el modelo Enfermedades
    public function Enfermedades()
    {
        return $this->belongsToMany(Enfermedades::class,'user_enfermedads','id_user','id_enfermedad');
    }

    //relacion con el modelo membresias
    public function membresias()
    {
        return $this->belongsTo(Membresias::class,'membresia_id','id');
    }

    //relacion con el modelo rutina
    public function rutinas()
    {
        return $this->belongsToMany(Rutina::class,'user_rutinas','id_user','id_rutina');
    }

}
