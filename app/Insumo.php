<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
  protected $table = 'insumos';

  protected $fillable = [
    'insumoTipo_id',
    'negocio_id',
    'nombre',
    'descripcion',
    'precio',
    'foto',
    'status'
  ];
}
