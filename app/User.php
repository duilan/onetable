<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    protected $fillable = [
        'rol_id',
        'name',
        'email',
        'password',
        'status',
        'deleted_at'
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
