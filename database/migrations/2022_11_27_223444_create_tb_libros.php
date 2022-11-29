<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('tb_libros', function (Blueprint $table) {

            $table->engine="InnoDB";
            $table->bigincrements('idLibro');
            $table->bigInteger('isbn');
            $table->string('titulo');
            $table->bigInteger('autor')->unsigned();
            $table->integer('paginas');
            $table->string('editorial');
            $table->string('correo');
            $table->timestamps();

            $table->foreign('autor')->references('idAutor')->on('tb_autores')->onDelete('cascade');

        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_libros');
    }
};
