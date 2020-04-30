<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Flight;
use DB;
use App\City;
use App\Http\Controllers\Controller;
use App\Http\Requests\FlightCreateRequest;

class FlightController extends Controller
{

	public function index()
	{	
		$flights = Flight::select()->get();
		$city = new City;
		return view('backend.flight.index',compact('flights','city'));
	}

    public function create(){
    	$city = City::select('iata_code','id')->get();

    	return view('backend.flight.create')->with('city',$city);
    }

    public function store(FlightCreateRequest $request)
    {

    	DB::transaction(function() use ($request){
       	 $flight = Flight::create($request->flight_fill());
		});
		return redirect()->back();
    	
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $flight = Flight::find($id);
        $city = City::select('iata_code','id')->get();

         return view('backend.flight.edit', compact('flight','city'));
    }

    public function update(FlightCreateRequest $request,$id)
    {

        $flight = Flight::find($id);

        DB::transaction(function () use ($request, $flight)
        {
            $flight->update($request->flight_fill());

        });

        return redirect()->back()->withSuccess(trans('messages.update_success'));
    }

    public function destroy($id)
    {
        //

        $flight = Flight::find($id);
         if ($flight->delete())
        {
            return redirect()->back();
        }

    }
}
