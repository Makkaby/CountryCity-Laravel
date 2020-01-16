<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;

class CountryController extends Controller
{
    //
    public function index() {
        $country=\App\Models\country::all()->sortBy('name');
        return view('welcome', compact('country'));
        }
       //return view("category.index",["categories"=>$categories]);
       
       public function indexx()
       {
       $country=Country::get();//all()
       return view("country.index",["country"=>$country]);
       }


        /**
        * Display the specified resource.
        *
        * @param int $id
        * @return \Illuminate\Http\Response
        */
       public function show($id)
       {
       $country=Country::find($id);
       }
      

        //public function listCountryByID($id){
        //$books=\App\Models\Book::where('category_id','=',$id)->get();
        //$category=\App\Models\Category::where('id','=',$id)->first();
        //$categories=\App\Models\Category::all()->sortBy('name');
        //return view('main', ['books' => $books,'category'=> $category,
       //'categories'=>$categories]);
        }
       

