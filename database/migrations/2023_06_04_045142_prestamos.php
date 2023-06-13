<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_libro')->unsigned();
            $table->bigInteger('id_usuario')->unsigned();
            $table->date('fecha_prestamo')->notNull();
            $table->date('fecha_devolucion')->notNull();
            $table->foreign('id_libro')->references('id')->on('libros');
            $table->foreign('id_usuario')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestamos');
    }
};
