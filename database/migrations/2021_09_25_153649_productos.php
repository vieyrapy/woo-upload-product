<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Productos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Productos simples para woccommerce
 
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignID('lista_id')->constrained('listas');
            $table->string('sku');
            $table->string('nombre');
            $table->string('descripcion');
            $table->integer('precionormal');
            $table->string('categorias');
            $table->string('imagenes');
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
        //
    }
}
