<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
Use App\City;

class CountryAddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
        
         //$countries2 = Country::all()->toArray();
         //$countries2 = Country::all();

         //$city = Country::where('KEN')->first();
         //echo $city->capital->name;
         //$countries2= Country::

       // $city = City::find(1);
       // echo $city->city['name'];
       $name1 = 'Estonia';
       $name2 = 'Latvia';
       $name3 = 'Netherlands';
         //$countries2 = Country::with('capital')->get();
         $country1 = Country::where('name', $name1)->first();
         $country2 = Country::where('name', $name2)->first();
         $country3 = Country::where('name', $name3)->first();
         
         $collection = collect([$country2, $country3, $country1]);
         //$sorted = $collection->sortBy('name');
         
         $sorted = $collection->sort();
         
         //$sor = Country::with('capital')->$sorted;
         return view('country.index', compact('sorted'));

         //$row->capital['name']
     }
     //https://stackoverflow.com/questions/37563359/display-name-instead-of-id-laravel/37563940#37563940

     //$countries = Country::with('capital')->get();
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         //
         //return view('country.create');
     }
 
     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
         
     }
 
     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show($id)
     {
         //
     }
 
     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit($id)
     {
         //
     }
 
     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id)
     {
         //
     }
 
     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         //
     }
 }
 