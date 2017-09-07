<?php

namespace App;

/*
Schema::create('corredoras', function (Blueprint $table) {
            $table->increments('id');

            $table->String('rut');
            $table->String('nombre');
            $table->String('correo');
            $table->String('fono');
            
            $table->integer('comuna_id')->unsigned();
            $table->foreign('comuna_id')->references('id')->on('comunas');
            
            $table->String('direccion');

            $table->timestamps();
*/

use Illuminate\Database\Eloquent\Model;

class Corredora extends Model
{
    protected $table = 'corredoras';

    protected $fillable = ['rut'];
    protected $fillable = ['nombre'];
    protected $fillable = ['correo'];
    protected $fillable = ['fono'];
    protected $fillable = ['direcion'];

     	public function comuna(){
    		return $this->hasMany('App\Comuna');
    	}
}
