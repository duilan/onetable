<?php

use Illuminate\Database\Seeder;

class InsumoTiposTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('insumoTipos')->insert([
            'nombre' => 'Platillo',
            'negocio_id' => 1,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('insumoTipos')->insert([
            'nombre' => 'Bebida',
            'negocio_id' => 1,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

        DB::table('insumoTipos')->insert([
            'nombre' => 'Postre',
            'negocio_id' => 1,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ]);

    }
}
