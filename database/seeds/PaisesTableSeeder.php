<?php

use Illuminate\Database\Seeder;

class PaisesTableSeeder extends Seeder
{
  public function run()
  {
    // USUARIO ADMINISTRADOR Onetable
    DB::table('paises')->insert([
      'nombre' => 'Mexico',
      'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
    ]);
  }
}
