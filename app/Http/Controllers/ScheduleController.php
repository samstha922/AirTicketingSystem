<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ScheduleCreateRequest;
use App\Http\Controllers\Controller;
use App\Flight;
use App\Schedule;
use App\City;
use App\PivotScheduleScheduler;
use DB;

class ScheduleController extends Controller
{

    public function index()
    { 
      $schedules = Schedule::select()->get();
      $city = new City;
      
      return view('backend.schedule.index',compact('schedules','city'));
    }

    public function create()
    {
      $flights = Flight::select()->get();
      $city = new city;

      return view('backend.schedule.create',compact('city'))->with('flights',$flights);
    }

    public function store(ScheduleCreateRequest $request)
    {
      DB::transaction(function() use ($request){
         $schedule = Schedule::create($request->schedule_fill());
         foreach ($request->getDay() as $day) {
            $schedule->week()->attach($day);
         }
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
        $schedule = Schedule::find($id);
        $flights = Flight::select()->get();
        $city = new city;

         return view('backend.schedule.edit', compact('schedule','flights','city'));
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

        $schedule = Schedule::find($id);
         if ($schedule->delete())
        {
            return redirect()->back();
        }

    }
    
}
