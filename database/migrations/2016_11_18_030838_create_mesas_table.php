<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMesasTable extends Migration
{

  public function up()
  {
    Schema::create('mesas', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('sucursal_id')->unsigned();
      $table->string('identificador');
      $table->tinyInteger('capacidad')->default(0);
      $table->string('status')->default('libre');
      $table->timestamps();
      //references
      $table->foreign('sucursal_id')->references('id')->on('sucursales');
    });
  }

  public function down()
  {
    Schema::drop('mesas');
  }
}
