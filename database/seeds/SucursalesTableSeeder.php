<?php

use Illuminate\Database\Seeder;

class SucursalesTableSeeder extends Seeder
{

  public function run()
  {
    DB::table('sucursales')->insert([
      'negocio_id' => 1,
      'user_id' => 3,
      'nombre' => 'Vips Condesa',
      'coordenadaLatitud' => '31938103.38193',
      'coordenadaLongitud' => '-9492443.324324',
      'foto' => 'sucursal/vipscondesa.png',
      'descripcion' => 'Vips condesa fue construida en 2010 una de las 3 sucursales mas grandes en México',
      'status' => 'activo',
      'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
    ]);
  }
}
