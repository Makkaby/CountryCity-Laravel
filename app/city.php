<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Eloquent;

class city extends Eloquent
{
    //
    /*public $id;
    public $name;
    public $countrycode;
    public $district;
    public $population;
    */
    protected $table = 'city';
    protected $fillable = ['name', 'countrycode', 'district', 'population'];
    public $timestamps = false;


    public function city()
    {
       return $this->belongsTo('App\Country', 'capital', 'id');
    }
    //public function city() {
    //    return $this->belongsTo(Country::class);
    //  }
    
}

/*
public function countCitiesByCountry()
 {
 return $this->cities()
 ->selectRaw('code, count(*) as citiesCount')
 ->groupBy('code');
 }
 */