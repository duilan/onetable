<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
      // USUARIO ADMINISTRADOR Onetable
      DB::table('users')->insert([
        'name' => 'Adrian Cortes',
        'email' => 'idwylan@gmail.com',
        'password' => bcrypt('secret'),
        'rol' => '1',
      ]);
    }
}
