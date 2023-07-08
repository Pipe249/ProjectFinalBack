<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Nombres', 30);
            $table->string('Apellidos', 30);
            $table->string('TipoIdentificacion', 20);
            $table->integer('NumeroIdentificacion')->unsigned();
            $table->integer('Telefono')->unsigned();
            $table->string('Email', 20);
            $table->string('Profesion', 30);
            $table->string('Rol', 20);
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registros');
    }
}
