<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('master');
});

Route::get('/home', function () {
    return view('home');
});

    //Route::get("city", "CityController@getall");
    
    Route::resource('city', 'CityaddController');
    Route::resource('country', 'CountryaddController');
    
    
//Route::get('/', 'CityController@index');
//Route::get('/city', 'CityController@index')->name("city.index");
//Route::get('/city/{id}','CityController@find')->where('id', '[0-9]+');
//Route::get('/event', 'CityController@title');

//Route::get('/news', function () {
//    return view("city");
//});
//Route::get('city','CityController@gett');

/*
Route::get('city', function()
    {
        return View::make('city');
    });
*/


    //Route::resource("country", "CountryController");
    //Route::get("country2", "CountryController@getall");
    //Route::get('/city', 'CityController@cities');
//Route::get('/books', 'CountryController@index')->name("books.index");
//Route::get('/', 'CountryController@index');
//Route::get('/cities', 'CityController@index')->name("cities.index");
//Route::get('/main', 'MainController@index');








//https://www.youtube.com/watch?v=vGo7JERIH7A&list=PLxl69kCRkiI0rS3u_4hFDA1nyqol4MMZe&index=3
/*//https://vegibit.com/how-to-pass-data-to-views-in-laravel/
https://www.studentstutorial.com/laravel/retrieve-data-laravel
---table
<table>
            <tr>
            <td>Name</td>
            <td>Code</td>
            <td>District</td>

            </tr>
            @foreach ($cities as $city)
            <tr>
            <td>{{ $city->name }}</td>
            <td>{{ $city->countrycode }}</td>
            <td>{{ $city->district }}</td>

            </tr>
            @endforeach
            </table>
*/




/*
@extends('welcome')
@section('content')
        <h1>Hello, </h1>
            <div class = "row">
                <div class = "col-md-12">
                    <br />
                    <h3 align="center">The Data</h3>
                    <br />
                    <table>
                        <tr>
                        <th>Name</th>
                        <th>Code</th>
                        <th>District</th>
                        <th>Population</th>
                        </tr>
                        @foreach($cities as $row)
                        <tr>
                        <td>{{$row['name']}}</td>
                        <td>{{$row['countrycode']}}</td>
                        <td>{{$row['district']}}</td>
                        <td>{{$row['population']}}</td>
                        </tr>
                        @endforeach
                        </table>
                </div>
            </div>
@endsection
*/