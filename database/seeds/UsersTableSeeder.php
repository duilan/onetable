<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
  public function run()
  {
    // USUARIO ADMINISTRADOR Onetable
    DB::table('users')->insert([
      'rol_id' => 1,
      'name' => 'Adrian',
      'email' => 'admin@mail.com',
      'password' => bcrypt('admin'),
      'status' => 'activo',
      'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
    ]);

    // USUARIO EJEMPLO Negocio
    DB::table('users')->insert([
      'rol_id' => 2,
      'name' => 'Alfredo',
      'email' => 'negocio@mail.com',
      'password' => bcrypt('negocio'),
      'status' => 'activo',
      'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
    ]);

    // USUARIO EJEMPLO Sucursal
    DB::table('users')->insert([
      'rol_id' => 3,
      'name' => 'Gabriel',
      'email' => 'sucursal@mail.com',
      'password' => bcrypt('sucursal'),
      'status' => 'activo',
      'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
    ]);

  }
}
