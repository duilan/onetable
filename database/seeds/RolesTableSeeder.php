<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
      // USUARIO ADMINISTRADOR Onetable
      DB::table('roles')->insert([
        'nombre' => 'Administrador',
        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
      ]);

      DB::table('roles')->insert(
      [
        'nombre' => 'Negocio',
        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
      ]);

      DB::table('roles')->insert(
      [
        'nombre' => 'Sucursal',
        'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
      ]);

    }
}
