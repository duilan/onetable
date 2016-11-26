<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsumoTiposTable extends Migration
{

    public function up()
    {
        Schema::create('insumoTipos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('negocio_id')->unsigned();
            $table->string('nombre');
            $table->timestamps();
            //references
            $table->foreign('negocio_id')->references('id')->on('negocios');
        });
    }

    public function down()
    {
        Schema::drop('insumoTipos');
    }
}
