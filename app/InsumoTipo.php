<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InsumoTipo extends Model
{
    protected $table = 'insumoTipos';

    protected $fillable = ['nombre','negocio_id'];

    public function negocio()
    {
        return $this->belongsTo(Negocio::class);
    }
}
