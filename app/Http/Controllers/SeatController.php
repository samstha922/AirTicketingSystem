<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Seat;
use Session;

class SeatController extends Controller
{
    public function index()
    {
        $seats= Seat::orderBy('seat_name')->get();
        //$i=($seats->currentPage()-1)*$seats->perPage()+1;
        return view('backend.seat.index')->withSeats($seats);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.seat.create');
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
            'seat_name'=> 'required'
        ));


        $seat=new Seat;

        $seat->seat_name=$request->seat_name;


        $seat->save();

        Session::flash('success','New Seat has been successfully added');
        return redirect()->route('seat.create');
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
        $seat=Seat::find($id);
        return view('backend.seat.edit')->withSeat($seat);
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
            'seat_name'=> 'required'
        ));
        $seat=Seat::find($id);
        $seat->seat_name=$request->input('seat_name');
       

        $seat->save();
        //set flash data with success message
        Session::flash('success','Specified seat has been successfully updated');
        //redirect with flash data to posts.show
        return redirect()->route('seat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seat=Seat::findorFail($id);
        $seat->delete();
        Session::flash('success','Specified seat has been successfully deleted');
        return redirect()->route('seat.index');
    }
}
