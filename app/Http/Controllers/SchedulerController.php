<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Flight;
use App\Cabin;
use App\Rbd;
use App\Fare;
use App\Schedule;
use App\Scheduler;
use App\City;
use DB;
use Carbon\Carbon;
use App\Http\Requests\SchedulerCreateRequest;
use App\Http\Controllers\Controller;

class SchedulerController extends Controller
{   
    public function index()
    {
        $scheduler = Scheduler::select('lot_no','flight_id','date_from','date_to','depart_time','arrive_time')->distinct()->get();
        // dd($scheduler);
        $city = new City;
        $schedule = new Schedule;
        return view('backend.scheduler.index',compact('scheduler','city','schedule'));
    }

    public function show($id)
    {
        $scheduler = Scheduler::select()->where('lot_no',$id)->orderBy('date','asc')->get();
        $city = new City;
        $rbd = new Rbd;
        $schedule = new Schedule;
        return view('backend.scheduler.show',compact('scheduler','city','schedule','rbd'));
    }


    public function create(){
    	$flights = Flight::select()->get();
      $city = new city;

      return view('backend.scheduler.create',compact('city'))->with('flights',$flights);
    }

    public function loader(Request $request)
    {   
        $scheduler = new Scheduler;
        $lot = $scheduler->getMax();
        $city = new City;
        $flight_id = $request->flight_id;
        $date_from = $request->date_from;
        $date_to = $request->date_to;
        // dd($scheduler->dateDayRange($date_from,$date_to));
        $dates=$scheduler->dateDayRange($date_from,$date_to);
        $schedule = Schedule::select()
                        ->where('flight_id',$flight_id)
                        ->first();
        // Schedule::select()->where('flight_id',$flight_id)->get();
        $valid_days = DB::table('schedule_week_pivot')->select('week_id')->where('schedule_id',$schedule->id)->get();
        $flight_dates = [];
        foreach ($valid_days as $key => $value) {
            $day = (string)$value->week_id;
            // dd($day);
            $flight_dates = array_merge($flight_dates, $dates[$day]);
          
        }

        $fare = DB::table('fares')
              ->leftJoin('cabins','fares.cabin_id','=','cabins.id')
              ->leftJoin('rbds','fares.rbd_id','=','rbds.id')
              ->select('fares.id','fares.price_local_oneway','fares.price_usd_oneway','fares.price_local_roundtrip','fares.price_usd_roundtrip','fares.seat','fares.cabin_id','cabins.cabin','fares.rbd_id','rbds.rbd')
              ->orderBy('cabins.id','asc')
              ->orderBy('rbds.hierarchy','asc')
              ->get();
              // dd($fare);

        // dd($dates[1]);
        // dd($valid_days[0]->week_id);
        return view('backend.scheduler.scheduler_index',compact('flight_dates','schedule','fare','city','date_from','date_to','lot'));

    }
    public function store(Request $request)
    {
    	DB::transaction(function() use ($request){
       	 foreach ($request->scheduler as $key => $value) {
          $scheduler = new Scheduler();
          $scheduler->date_from = Carbon::parse($value['date_from']);
          $scheduler->date_to = Carbon::parse($value['date_to']);
          $scheduler->date = Carbon::parse($value['date']);
          $scheduler->flight_id = $value['flight_id'];
          $scheduler->rbd_id = $value['rbd_id'];
          $scheduler->cabin_id = $value['cabin_id'];
          $scheduler->seat =  $value['seat'];
          $scheduler->price_local_oneway = $value['price_local_oneway'];
          $scheduler->price_usd_oneway =  $value['price_usd_oneway'];
          $scheduler->price_local_roundtrip = $value['price_local_roundtrip'];
          $scheduler->price_usd_roundtrip = $value['price_usd_roundtrip'];
          $scheduler->depart_time = $value['depart_time'];
          $scheduler->arrive_time = $value['arrive_time'];
          $scheduler->lot_no = $value['lot'];
          $scheduler->source = $value['source'];
          $scheduler->destination = $value['destination'];
          $scheduler->save();
        }
		});
		return redirect(url('/scheduler'));
    	
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $scheduler = Scheduler::find($id);
        $city = new city;

         return view('backend.scheduler.edit', compact('scheduler','city'));
    }

    public function update(ScheduleCreateRequest $request,$id)
    {

      $schedule = Schedule::find($id);
       DB::transaction(function () use ($request, $schedule)
        {
           
            $schedule->update($request->schedule_fill());
            Schedule::find($schedule->id)->week()->detach();
            foreach ($request->getDay() as $day) {
            $schedule->week()->attach($day);
            }

          
        });

        return redirect()->back()->withSuccess(trans('messages.update_success'));
    }

    public function destroy($id)
    {
        //

        $scheduler = Scheduler::find($id);
         if ($scheduler->delete())
        {
            return redirect()->back();
        }

    }
}