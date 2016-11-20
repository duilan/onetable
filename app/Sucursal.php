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
    'status'
  ];
}
