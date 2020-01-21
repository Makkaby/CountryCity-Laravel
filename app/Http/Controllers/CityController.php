<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
class CityController extends Controller
{
    //
    public function index() {
        $city=\App\Models\city::all()->sortBy('name');
        return view('welcome', compact('city'));
        }

        public function getall() {
            $city=City::get();//all()
       return view("city",["city"=>$city]);
            }

            public function show($id)
       {
       $city=City::find($id);
       }

        public function title() {
            return view('Welcoem to City!');
            }

            public function cities() {
                $cities = City::all()-toArray();
                return view('city', compact('cities'));
                }


            //public function gett(){
            //    $cities = Database::select('SELECT * FROM `city`');
            //    return view('city',['cities'=>$cities]);
            //}

}
