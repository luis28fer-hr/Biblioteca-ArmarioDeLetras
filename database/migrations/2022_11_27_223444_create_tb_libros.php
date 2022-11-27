<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('tb_libros', function (Blueprint $table) {
            $table->increments('idLibro');
            $table->bigInteger('isbn');
            $table->string('titulo');
            $table->string('autor');
            $table->integer('paginas');
            $table->string('editorial');
            $table->string('correo');
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_libros');
    }
};
