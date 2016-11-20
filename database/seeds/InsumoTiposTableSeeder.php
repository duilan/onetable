<?php

use Illuminate\Database\Seeder;

class InsumoTiposTableSeeder extends Seeder
{

  public function run()
  {
    DB::table('insumoTipos')->insert([
      'nombre' => 'Platillo',
      'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
    ]);

    DB::table('insumoTipos')->insert([
      'nombre' => 'Bebida',
      'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
    ]);

    DB::table('insumoTipos')->insert([
      'nombre' => 'Postre',
      'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
    ]);

  }
}
