<?php

use Illuminate\Database\Seeder;

class InsumosTableSeeder extends Seeder
{

  public function run()
  {
    DB::table('insumos')->insert([
      'insumoTipo_id' => 1,
      'negocio_id' => 1,
      'nombre' => 'Chilaquiles Verdes',
      'descripcion' => 'Chilaquiles con salsa verde crema pollo quesillo y cebolla',
      'precio' => 29.30,
      'foto' => 'insumos/chilaquiles_verdes.png',
      'status' => 'activo',
      'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
    ]);
    DB::table('insumos')->insert([
      'insumoTipo_id' => 2,
      'negocio_id' => 1,
      'nombre' => 'Agua de Limon',
      'descripcion' => 'Agua de Limon especialidad de la casa',
      'precio' => 8.50,
      'foto' => 'insumos/agua_limon.png',
      'status' => 'activo',
      'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
    ]);
    DB::table('insumos')->insert([
      'insumoTipo_id' => 2,
      'negocio_id' => 1,
      'nombre' => 'Fresas con crema',
      'descripcion' => 'vaso de fresas con crema,chocolate y nuez',
      'precio' => 12.00,
      'foto' => 'insumos/fresas_crema.png',
      'status' => 'activo',
      'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
    ]);
  }
}
