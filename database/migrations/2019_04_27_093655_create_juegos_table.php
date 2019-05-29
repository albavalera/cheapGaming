<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJuegosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           Schema::create('Juego', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombre');
            $table->Integer('Precio');
            $table->string('Tipo');
            $table->string('Key');
            $table->string('Info');
            $table->string('Oferta');
            $table->string('imagen')->nullable();  

           $table->integer('id_desarrolladora')->unsigned();
           $table->foreign('id_desarrolladora')->references('id')->on('desarrolladoras')
                    ->onDelete('cascade')
                    ->onUpdate('cascade'); 
            
            
            
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
        Schema::dropIfExists('juego');
    }
}
