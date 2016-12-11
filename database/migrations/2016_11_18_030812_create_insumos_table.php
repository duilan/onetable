<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsumosTable extends Migration
{

  public function up()
  {
    Schema::create('insumos', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('insumoTipo_id')->unsigned();
      $table->integer('negocio_id')->unsigned();
      $table->string('nombre');
      $table->string('descripcion');
      $table->decimal('precio', 5, 2);
      $table->string('foto');
      $table->string('status')->default('activo');
      $table->timestamps();

      // references
      $table->foreign('insumoTipo_id')->references('id')->on('insumoTipos');
      $table->foreign('negocio_id')->references('id')->on('negocios');

    });
  }

  public function down()
  {
    Schema::drop('insumos');
  }
}
