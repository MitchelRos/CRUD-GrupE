<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 255)->unique();
            $table->string('autor', 255);
            $table->string('genero', 100);
            $table->text('descripcion')->nullable();
            $table->integer('paginas')->unsigned();
            $table->date('fecha_publicacion')->nullable();
            $table->float('precio_compra', 7, 2)->unsigned();
            $table->float('precio_venta', 7, 2)->unsigned();
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
        Schema::dropIfExists('libros');
    }
};
