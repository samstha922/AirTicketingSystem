<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\City;
use App\Flight;
use App\Cabin;
use App\Rbd;
use App\Fare;

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
      // $rbd = Rbd::all();
      // $cabin = new Cabin;
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

        return view('backend.fare.create',compact('city'))->withFlights($flight)->withRbds($rbd)->withCabin($cabin);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        foreach ($request->farePrice as $key => $value) {
          $fare = new Fare();
          $fare->flight_id = $request->flight_id;
          $fare->cabin_id = $request->cabin_id;
          $fare->cabin_id = $value['cabin'];
          $fare->rbd_id = $value['rbd'];
          $fare->price_local_oneway = $value['onewayNpr'];
          $fare->price_usd_oneway =  $value['onewayUsd'];
          $fare->price_local_roundtrip = $value['roundTripNpr'];
          $fare->price_usd_roundtrip = $value['roundTripUsd'];
          $fare->seat =  $value['seat'];
          // dd($value['cabin']);
          // dd($fare);
          $fare->save();
        }



        return redirect()->route('fare.index');
    }

    public function check(Request $req){

      // dd($req);
      // $id = $req->flight_id;


    //   $id = 2;
    //   if (Flight::where('id','=',$id)->exists()){
    //     echo "string";
    //   }
    //   else {
    //     // echo "no";
    //     $rbd = Rbd::all();
    //     $cabin = new Cabin;
    //
    //     $flight = Flight::findorFail('$id');
    //     return view('backend.fare.create')->withRbds($rbd)->withCabin($cabin);
    //   }
    // }





      // dd($req);
      $flight_id = $req->flight_id;
      if (Fare::where('flight_id','=', $flight_id)->exists()){
        // echo "string";
        $city = new City;
        $rbd = new Rbd;
        $cabin = new Cabin;
        $faredetail = Fare::where('flight_id','=', $flight_id)->get();
        // dd($faredetail[0]->cabin_id);
        return view('backend.fare.edit')->withFairdetails($faredetail)->withCabin($cabin)->withRbd($rbd);
      }
      else {
        // echo "no";
        $rbd = Rbd::all();
        // dd($rbd);
        $cabin = new Cabin;
        // $flight = Flight::findorFail('$id');
        return view('backend.fare.create')->withRbds($rbd)->withCabin($cabin)->withFlight_id($flight_id);
        // // return view('backend.fare.create',compact('city'))->withFlights($flight)->withRbds($rbd)->withCabin($cabin);
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
