<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $table = 'provincias';

    protected $fillable = ['nombre'];

        public function region(){
    	   return $this->belongsTo('App\Region');
        }

        public function comunas(){
            return $this->hasMany('App\Comuna');
        }

        public static function provincias($id){
       	return Provincia::where('region_id', '=', $id)->get();

    	
    	}
    
}
