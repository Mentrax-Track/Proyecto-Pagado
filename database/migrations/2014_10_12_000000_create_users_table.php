<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->integer('cedula');
            $table->integer('celular');
            $table->string('facultad');
            $table->string('carrera');
            $table->string('materia');
            $table->string('sigla');
            $table->enum('tipo',['administrador','super-usuario','usuario']);
            $table->enum('rol',['admin','encargado-seccion','chofer','mecanico','usuario']);
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->boolean('active')->default(true);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
