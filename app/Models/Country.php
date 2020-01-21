<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'country';
    protected $fillable = ['code', 'name', 'continent', 'region','surfacearea','indepyear','population','lifeexpectancy','gnp','gnpold','localname','governmentform','headofstate','capital','code2'];
    public $timestamps = false;
/*
    public function capital() {
        return $this->hasMany('City', 'capital','id');
      }
*/
    public function capital() {
    return $this->hasMany(City::Class);
  }
    //public function country() {
     //   return $this->belongsTo('App\City', 'id');
     // }
}
//public function City()
    //{
    //return $this->belongsTo('App\Models\City');
    //}