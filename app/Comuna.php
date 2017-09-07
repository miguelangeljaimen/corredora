<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    protected $table = 'comunas';

    protected $fillable = ['nombre'];

    public function provincia(){
    	return $this->belongsTo('App\Provincia');
    }

    public function propiedades(){
    	return $this->hasMany('App\Propiedad');
    }

    public function corredoras(){
    	return $this->hasMany('App\Corredora');
    }
}
