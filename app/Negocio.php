<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Negocio extends Model
{
    use SoftDeletes;

    protected $table = 'negocios';

    protected $fillable = [
        'pais_id',
        'user_id',
        'razonSocial',
        'rfc',
        'logo',
        'email',
        'calle',
        'numeroExterior',
        'numeroInterior',
        'colonia',
        'delegacion',
        'estado',
        'codigoPostal',
        'status',
        'deleted_at'
    ];

    public function setNumeroInteriorAttribute($value)
    {
        $this->attributes['numeroInterior'] = $value ?: null;
    }

    public function pais()
    {
        return $this->belongsTo(Pais::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function InsumoTipos()
    {
        return $this->hasMany(InsumoTipo::class);
    }

    public function sucursales()
    {
        return $this->hasMany(Sucursal::class);
    }
}
