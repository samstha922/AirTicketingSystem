<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Meal;
use Session;
class MealController extends Controller
{
    public function index()
    {
        $meals= Meal::orderBy('meal_name')->get();
        //$i=($meals->currentPage()-1)*$meals->perPage()+1;
        return view('backend.meal.index')->withMeals($meals);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.meal.create');
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
            'meal_name'=> 'required'
        ));


        $meal=new Meal;

        $meal->meal_name=$request->meal_name;


        $meal->save();

        Session::flash('success','New Meal has been successfully added');
        return redirect()->route('meal.create');
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
        $meal=Meal::find($id);
        return view('backend.meal.edit')->withMeal($meal);
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
            'meal_name'=> 'required'
        ));
        $meal=Meal::find($id);
        $meal->meal_name=$request->input('meal_name');
       

        $meal->save();
        //set flash data with success message
        Session::flash('success','Specified meal has been successfully updated');
        //redirect with flash data to posts.show
        return redirect()->route('meal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $meal=Meal::findorFail($id);
        $meal->delete();
        Session::flash('success','Specified meal has been successfully deleted');
        return redirect()->route('meal.index');
    }
}
