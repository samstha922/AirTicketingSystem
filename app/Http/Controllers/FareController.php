<?php

namespace App\Http\Controllers;

use App\Cabin;
use App\City;
use App\Fare;
use App\Flight;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Rbd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $flight = Flight::all();
      $city = new City;

      return view('backend.fare.index',compact('city'))->withFlights($flight);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $flight = Flight::all();
        $city = new City;
        $rbd = Rbd::all();
        $cabin = new Cabin;

        return view('backend.fare.create',compact('city'))->withFlights($flight)
                                                          ->withRbds($rbd)
                                                          ->withCabin($cabin);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      // dd($request);
      // $this->validate($request, [
      //      'flight_id' => 'required',
      //      'cabin_id' => 'required',
      //      'rbd_id' => 'required|alpha|max:1',
      //      'price_local_oneway' => 'required|numeric',
      //      'price_usd_oneway' => 'required|numeric',
      //      'price_local_roundtrip' => 'required|numeric',
      //      'price_usd_roundtrip' => 'required|numeric',
      //      'seat' => 'digits'
      //  ]);

        foreach ($request->farePrice as $key => $value) {

          $fare = new Fare();

          if ($value['seat'] == '-') {
            $fare->flight_id = $request->flight_id;
            $fare->cabin_id = $value['cabin'];
            $fare->rbd_id = $value['rbd'];
            $fare->price_local_oneway = '0';
            $fare->price_usd_oneway =  '0';
            $fare->price_local_roundtrip = '0';
            $fare->price_usd_roundtrip = '0';
            $fare->seat =  '0';

            $fare->save();

          }
          else {
            $fare->flight_id = $request->flight_id;
            $fare->cabin_id = $value['cabin'];
            $fare->rbd_id = $value['rbd'];
            $fare->price_local_oneway = $value['onewayNpr'];
            $fare->price_usd_oneway =  $value['onewayUsd'];
            $fare->price_local_roundtrip = $value['roundTripNpr'];
            $fare->price_usd_roundtrip = $value['roundTripUsd'];
            $fare->seat =  $value['seat'];

            $fare->save();
          }

        }

        return redirect()->route('fare.index')->with(['success'=>'Succesfuly, Created Fare !']);
    }

    public function check(Request $req){

      $flight_id = $req->flight_id;
      $flightDesc = Flight::select('flight_no','source_id','destination_id')->where('id','=',$flight_id)->first();
      // dd($flightDesc->source_id);

      if (Fare::where('flight_id','=', $flight_id)->exists()){

        $city = new City;
        $rbd = new Rbd;
        $cabin = new Cabin;
        $faredetails = Fare::where('flight_id','=', $flight_id)->get();
        // dd($faredetails);

        return view('backend.fare.edit')->withFaredetails($faredetails)
                                        ->withCabin($cabin)->withRbd($rbd)
                                        ->withFlight_id($flight_id)
                                        ->withFlightdesc($flightDesc)
                                        ->withCity($city);
      }
      else {
        $city = new City;
        $rbd = Rbd::all();
        $cabin = new Cabin;

        return view('backend.fare.create')->withRbds($rbd)
                                          ->withCity($city)
                                          ->withCabin($cabin)
                                          ->withFlight_id($flight_id)
                                          ->withFlightdesc($flightDesc);

      }
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
      // dd($request->farePrice['0']['onewayNpr']);
      // foreach ($request->farePrice as $key => $fareprice) {
        // $this->validate($request, [
        //      $request->fareprice[0]['onewayNpr'] => 'required|numeric',
        //      $request->fareprice[0]['onewayUsd'] => 'required|numeric',
        //      $request->fareprice[0]['roundTripNpr'] => 'required|numeric',
        //      $request->fareprice[0]['roundTripUsd'] => 'required|numeric',
        //      $request->fareprice[0]['seat']  => 'required'
        //  ]);

      // }




        $fares = Fare::where('flight_id','=',$id)->get();
        foreach ($request->farePrice as $fareprice) {
          foreach ($fares as $key => $fare) {
            if ($fareprice['flight_id'] == $fare->id ) {

              if ($fareprice['seat'] == '-') {
                $fare->price_local_oneway = '0';
                $fare->price_usd_oneway = '0';
                $fare->price_local_roundtrip = '0';
                $fare->price_usd_roundtrip = '0';
                $fare->seat = '0';

                $fare->save();
              }

              else {

                $fare->price_local_oneway = $fareprice['onewayNpr'];
                $fare->price_usd_oneway = $fareprice['onewayUsd'];
                $fare->price_local_roundtrip = $fareprice['roundTripNpr'];
                $fare->price_usd_roundtrip = $fareprice['roundTripUsd'];
                $fare->seat = $fareprice['seat'];

                $fare->save();
              }
            }
          }
        }

        return redirect()->route('fare.index')->with(['success'=>'Succesfuly, Update Fare !']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
