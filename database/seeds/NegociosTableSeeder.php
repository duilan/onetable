<?php

use Illuminate\Database\Seeder;

class NegociosTableSeeder extends Seeder
{
  public function run()
  {
        // Negocios
    DB::table('negocios')->insert([
      'fullName' => 'Vips S.A de C.V',
      'smallName' => 'Vips',
      'rfc' => 'COHG920517AE8',
      'director' => 'Luis Enriquez Medina Contreras',
      'logo' => '/negocios/vips/logo.png',
      'userNegocio' => 'vips',
      'password' => bcrypt('secret'),
      ]);

    DB::table('negocios')->insert([
      'fullName' => 'Chilis S.A de C.V',
      'smallName' => 'Chilis',
      'rfc' => 'COHG845316EU3',
      'director' => 'Juan Antonio Garcia Monrroy',
      'logo' => '/negocios/chilis/logo.png',
      'userNegocio' => 'chilis',
      'password' => bcrypt('secret'),
      ]);
  }
}
