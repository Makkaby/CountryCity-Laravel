<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CityAddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$cities = City::all()->toArray()->orderBy('name')
        //->take(10)
        //->get();
        $cities = City::orderBy('name')->get();
        return view('city.index', compact('cities'));
    }


    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('city.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //'name', 'countrycode', 'district', 'population'
        $this->validate($request, [
            'name'    =>  'required',
            'countrycode'     =>  'required',
            'district'     =>  'required',
            'population'     =>  'required'
        ]);
        $city = new City([
            'name'    =>  $request->get('name'),
            'countrycode'     =>  $request->get('countrycode'),
            'district'     =>  $request->get('district'),
            'population'     =>  $request->get('population')
        ]);
        $city->save();
        return redirect()->route('city.index')->with('success', 'Data Added');
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
        $city = City::find($id);
        return view('city.edit', compact('city', 'id'));
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
        $this->validate($request, [
            'name'    =>  'required',
            'countrycode'     =>  'required',
            'district'     =>  'required',
            'population'     =>  'required'
        ]);
        $city = City::find($id);
        $city->name = $request->get('name');
        $city->countrycode = $request->get('countrycode');
        $city->district = $request->get('district');
        $city->population = $request->get('population');
        $city->save();
        return redirect()->route('city.index')->with('success', 'Data Updated');
    
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
        $city = City::find($id);
        $city->delete();
        return redirect()->route('city.index')->with('success', 'Data Deleted');
    }
}
