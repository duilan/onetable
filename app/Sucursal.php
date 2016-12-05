<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table = 'sucursales';

    protected $fillable = [
        'negocio_id',
        'user_id',
        'nombre',
        'coordenadaLatitud',
        'coordenadaLongitud',
        'foto',
        'descripcion',
        'status'
    ];

    public function negocio()
    {
        return $this->belongsTo(Negocio::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
