<?php


/*

            $table->increments('id');
            $table->enum('estado',['ARRENDADA','VENDIDAD','PUBLICADA','OTRO']); 
            $table->integer('cliente_id')->unsigned();
            $table->integer('categoria_id')->unsigned();
            $table->integer('comuna_id')->unsigned();
            $table->String('direccion');
            $table->enum('alcantarillado',['SI','NO']); 
            $table->enum('electricidad',['SI','NO']); 
            $table->enum('dormitorios',['NO','1','2','3','4+']); 
            $table->enum('bagnos',['NO','1','2','3','4+']); 
            $table->enum('bodega',['SI','NO']); 
            $table->enum('estacionamiento',['SI','NO']); 
            $table->text('comentario');
			$table->timestamps();

*/

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model
{
    protected $table = 'propiedades';

    	protected $fillable = ['estado','direccion','alcantarillado','electricidad','dormitorios','bagnos','bodega','estacionamiento','comentario'];

		public function cliente(){
    		return $this->belongsTo('App\Cliente');
    	}
    
     	public function categoria(){
    		return $this->belongsTo('App\Categoria');
    	}

     	public function comuna(){
    		return $this->belongsTo('App\Comuna');
    	}
}
