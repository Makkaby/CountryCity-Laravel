<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    //
    /*public $id;
    public $name;
    public $countrycode;
    public $district;
    public $population;
    */
    protected $fillable = ['name', 'countrycode', 'district', 'population'];

}

/*
public function countCitiesByCountry()
 {
 return $this->cities()
 ->selectRaw('code, count(*) as citiesCount')
 ->groupBy('code');
 }
 */