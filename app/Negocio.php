<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Negocio extends Model
{
  protected $fillable = [
      'fullName', 'smallName', 'RFC', 'director', 'userNegocio', 'logo' 
  ];

  protected $hidden = [
      'password',
  ];
}
