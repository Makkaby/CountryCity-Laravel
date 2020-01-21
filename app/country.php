<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

class country extends Eloquent

{
   protected $table = 'country';
   public $timestamps = false;
   protected $fillable = ['code', 'name', 'continent', 'region','surfacearea','indepyear','population','lifeexpectancy','gnp','gnpold','localname','governmentform','headofstate','capital','code2'];

   //public function capital() {
   // return $this->belongsTo(City::class);
   //}

   public function capital() {
     return $this->hasMany('App\City', 'countrycode','code');
   }
  
   //public function country() {
   // return $this->belongsTo('App\City', 'id');
  //}
}