<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\City;
use App\Timezone;
use Session;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities= City::orderBy('city_name')->get();
        return view('backend.city.index')->withCities($cities);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $timezones=Timezone::all();
        return view('backend.city.create')->withTimezones($timezones);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         //validate the data
        $this->validate($request,array(
            'city_name'=> 'required',
            'iata_code'=>'required | max:3',
            'icao_code'=>'required | max:4',
            'airport_name'=>'required',
            'timezone_id'=>'required'
        ));



        $city=new City;

        $city->city_name=$request->city_name;
        $city->iata_code=$request->iata_code;
        $city->icao_code=$request->icao_code;
        $city->airport_name=$request->airport_name;
        $city->timezone_id=$request->timezone_id;


        $city->save();

        Session::flash('success','New city has been successfully added');
        return redirect()->route('city.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$city=City::find($id);
        //return view('backend.city.show')->with('city',$city);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $timezones=Timezone::all();
        $city=City::find($id);
        return view('backend.city.edit')->withCity($city)->withTimezones($timezones);
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
        $this->validate($request,array(
            'city_name'=> 'required',
            'iata_code'=>'required | max:3',
            'icao_code'=>'required | max:4',
            'airport_name'=>'required',
            'timezone_id'=>'required'
        ));
        $city=City::find($id);
        $city->city_name=$request->input('city_name');
        $city->iata_code=$request->input('iata_code');
        $city->icao_code=$request->input('icao_code');
        $city->airport_name=$request->input('airport_name');
        $city->timezone_id=$request->input('timezone_id');

        $city->save();
        //set flash data with success message
        Session::flash('success','Specified city has been successfully updated');
        //redirect with flash data to posts.show
        return redirect()->route('city.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $city=City::findorFail($id);
        $city->delete();
        Session::flash('success','Specified city has been successfully deleted');
        return redirect()->route('city.index');
    }
}
