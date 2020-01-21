<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'city';
    protected $fillable = ['name', 'countrycode', 'district', 'population'];
    public $timestamps = false;

    //public function city() {
    //    return $this->belongsTo(Country::class);
    //  }
    /*
    public function city()
    {
       return $this->belongsTo('Country', 'countrycode','code');
    }
    */
}
//public function Country()
    //{
    //return $this->hasMany('App\Models\Country');
   // }

    //