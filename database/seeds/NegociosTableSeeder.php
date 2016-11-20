<?php

use Illuminate\Database\Seeder;

class NegociosTableSeeder extends Seeder
{
  public function run()
  {
        // Negocios
    DB::table('negocios')->insert([
      'pais_id' => 1,
      'user_id' => 2,
      'razonSocial' => 'Vips S.A de C.V',
      'rfc' => 'COHG920517AE8',
      'logo' => '/logotipos/vips.png',
      'email' => str_random(10).'@gmail.com',
      'calle' => str_random(10),
      'numeroExterior' => rand(100,999),
      'numeroInterior' => rand(1,50),
      'colonia' => str_random(15),
      'delegacion' => str_random(15),
      'estado' => str_random(15),
      'codigoPostal' => rand(10000,99999),
      'status' => 'activo',
      'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
      ]);
  }
}
