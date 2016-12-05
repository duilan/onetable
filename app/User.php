<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'rol_id',
        'name',
        'email',
        'password',
        'status'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

    public function rol()
    {
        return $this->belongsTo(Rol::class);
    }

    public function negocio()
    {
        return $this->hasOne(Negocio::class);
    }

    public function sucursal()
    {
        return $this->hasOne(Sucursal::class);
    }

}
