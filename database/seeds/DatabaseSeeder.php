<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    $this->call(RolesTableSeeder::class);
    $this->call(UsersTableSeeder::class);
    $this->call(PaisesTableSeeder::class);
    $this->call(NegociosTableSeeder::class);
    $this->call(InsumoTiposTableSeeder::class);
    $this->call(InsumosTableSeeder::class);
    $this->call(SucursalesTableSeeder::class);
    $this->call(MesasTableSeeder::class);
    $this->call(ReservacionesTableSeeder::class);
  }
}
