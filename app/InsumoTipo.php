<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InsumoTipo extends Model
{
  protected $table = 'insumoTipos';

  protected $fillable = ['nombre'];
}
