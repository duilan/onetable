<?php

use Illuminate\Database\Seeder;

class ReservacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservaciones')->insert([
          'sucursal_id' => 1,
          'mesa_id' => 2,
          'alias' => 'Christian',
          'codigoqr' => str_random(20),
          'status' => 'activa',
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        DB::table('reservaciones')->insert([
          'sucursal_id' => 1,
          'mesa_id' => 3,
          'alias' => 'Diana',
          'codigoqr' => str_random(20),
          'status' => 'pendiente',
          'created_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
    }
}
