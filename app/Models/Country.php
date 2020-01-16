<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{//code, name, continent, region, surfacearea, indepyear, population, lifeexpectancy, gnp, gnpold, localname, governmentform, headofstate, capital, code2
    //
    protected $fillable = ['code', 'name', 'continent', 'region','surfacearea','indepyear','population','lifeexpectancy','gnp','gnpold','localname','governmentform','headofstate','capital','code2'];

    //public function City()
    //{
    //return $this->belongsTo('App\Models\City');
    //}

}
