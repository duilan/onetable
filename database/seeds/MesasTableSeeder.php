<?php

use Illuminate\Database\Seeder;

class MesasTableSeeder extends Seeder
{
  public function run()
  {
    DB::table('mesas')->insert([
      'sucursal_id' => 1,
      'identificador' => 'A1',
      'capacidad' => rand(3,10),
      'status' => 'libre',
      'created_at' => \Carbon\Carbon::now()->toDateTimeString()
    ]);
    DB::table('mesas')->insert([
      'sucursal_id' => 1,
      'identificador' => 'A2',
      'capacidad' => rand(3,10),
      'status' => 'ocupada',
      'created_at' => \Carbon\Carbon::now()->toDateTimeString()
    ]);
    DB::table('mesas')->insert([
      'sucursal_id' => 1,
      'identificador' => 'A3',
      'capacidad' => rand(3,10),
      'status' => 'reservada',
      'created_at' => \Carbon\Carbon::now()->toDateTimeString()
    ]);
    DB::table('mesas')->insert([
      'sucursal_id' => 1,
      'identificador' => 'B1',
      'capacidad' => rand(3,10),
      'status' => 'libre',
      'created_at' => \Carbon\Carbon::now()->toDateTimeString()
    ]);
  }
}
