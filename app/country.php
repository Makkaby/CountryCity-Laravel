<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class country extends Model

{
    /*
   public $code;
   public $name;
   public $continent;
   public $region;
   public $surfacearea;
   public $indepyear;
   public $population;
   public $lifeexpectancy;
   public $gnp;
   public $gnpold;
   public $localname;
   public $governmentform;
   public $headofstate;
   public $capital;
   public $code2;
   */
   protected $fillable = ['code', 'name', 'continent', 'region','surfacearea','indepyear','population','lifeexpectancy','gnp','gnpold','localname','governmentform','headofstate','capital','code2'];
}