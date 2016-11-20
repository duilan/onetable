<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
  public function up()
  {
    Schema::create('users', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('rol_id')->unsigned();
      $table->string('name');
      $table->string('email')->unique();
      $table->string('password');
      $table->string('status');
      $table->rememberToken();
      $table->timestamps();
      // references keys
      $table->foreign('rol_id')->references('id')->on('roles');
    });
  }
  public function down()
  {
    Schema::drop('users');
  }
}
