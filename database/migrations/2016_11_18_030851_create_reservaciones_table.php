<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservacionesTable extends Migration
{

  public function up()
  {
    Schema::create('reservaciones', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('sucursal_id')->unsigned();
      $table->integer('mesa_id');
      $table->string('alias');
      $table->string('codigoqr');
      $table->string('status');
      $table->timestamps();
      // references
      $table->foreign('sucursal_id')->references('id')->on('sucursales');
    });
  }

  public function down()
  {
    Schema::drop('reservaciones');
  }
}
