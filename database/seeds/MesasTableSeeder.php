<?php

use Illuminate\Database\Seeder;

class MesasTableSeeder extends Seeder
{
  public function run()
  {
    DB::table('mesas')->insert([
      'sucursal_id' => 1,
      'capacidad' => rand(3,10),
      'ubicacion' => 'planta baja',
      'status' => 'libre',
      'created_at' => \Carbon\Carbon::now()->toDateTimeString()
    ]);
    DB::table('mesas')->insert([
      'sucursal_id' => 1,
      'capacidad' => rand(3,10),
      'ubicacion' => 'planta baja',
      'status' => 'ocupada',
      'created_at' => \Carbon\Carbon::now()->toDateTimeString()
    ]);
    DB::table('mesas')->insert([
      'sucursal_id' => 1,
      'capacidad' => rand(3,10),
      'ubicacion' => 'planta baja',
      'status' => 'reservada',
      'created_at' => \Carbon\Carbon::now()->toDateTimeString()
    ]);
    DB::table('mesas')->insert([
      'sucursal_id' => 1,
      'capacidad' => rand(3,10),
      'ubicacion' => 'planta baja',
      'status' => 'libre',
      'created_at' => \Carbon\Carbon::now()->toDateTimeString()
    ]);
  }
}
