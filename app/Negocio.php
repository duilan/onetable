<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Negocio extends Model
{
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
        'status'
    ];

    public function pais()
    {
        return $this->belongsTo(Pais::class);
    }
}
