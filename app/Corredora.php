<?php



namespace App;

use Illuminate\Database\Eloquent\Model;

class Corredora extends Model
{
    protected $table = 'corredoras';

    protected $fillable = ['rut','nombre','correo','fono','direccion'];

     	public function comuna(){
    		return $this->belongsTo('App\Comuna');
    	}
}
