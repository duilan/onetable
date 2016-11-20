<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
  protected $table = 'reservaciones';

  protected $fillable = [
    'sucursal_id',
    'mesa_id',
    'alias',
    'codigoqr',
    'status'
  ];
}
