<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPropiedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propiedades', function (Blueprint $table) {
            $table->increments('id');
            
            //estado
            $table->enum('estado',['ARRENDADA','VENDIDAD','PUBLICADA','OTRO']); 

            //propietario
            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('clientes');
            
            //tipo propiedad
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias');
            
            //lugar
            $table->integer('comuna_id')->unsigned();
            $table->foreign('comuna_id')->references('id')->on('comunas');
            $table->String('direccion');

            
            //datos terreno
            $table->enum('alcantarillado',['SI','NO']); 
            $table->enum('electricidad',['SI','NO']); 
            
            //datos propiedad
            $table->enum('dormitorios',['NO','1','2','3','4+']); 
            $table->enum('bagnos',['NO','1','2','3','4+']); 
            $table->enum('bodega',['SI','NO']); 
            $table->enum('estacionamiento',['SI','NO']); 
            
            //info extra
            $table->text('comentario');

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
        Schema::dropIfExists('propiedades');
    }
}
