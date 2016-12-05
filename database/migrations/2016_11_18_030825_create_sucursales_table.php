<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSucursalesTable extends Migration
{

    public function up()
    {
        Schema::create('sucursales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('negocio_id')->unsigned();
            $table->integer('user_id')->nullable()->default(null)->unsigned();
            $table->string('nombre');
            $table->string('coordenadaLatitud');
            $table->string('coordenadaLongitud');
            $table->string('foto');
            $table->string('descripcion');
            $table->string('status')->default('activo');
            $table->timestamps();

            // references
            $table->foreign('negocio_id')->references('id')->on('negocios');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::drop('sucursales');
    }
}
