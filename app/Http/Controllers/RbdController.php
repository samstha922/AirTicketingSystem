<?php

namespace App\Http\Controllers;

use App\Cabin;
use App\Http\Requests;
use App\Rbd;
use Illuminate\Http\Request;
use Session;

class RbdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rbds= Rbd::orderBy('hierarchy')->get();
        //$i=($rbds->currentPage()-1)*$rbds->perPage()+1;
        return view('backend.rbd.index')->withRbds($rbds);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cabins=Cabin::all();
        return view('backend.rbd.create')->withCabins($cabins);
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
            'rbd'=> 'required | alpha | max:1',
            'cabin_id'=>'required | integer',
            'hierarchy'=>'required | integer |max:999'
        ));

        $rbd=new Rbd();

        $rbd->rbd=$request->rbd;
        $rbd->cabin_id=$request->cabin_id;
        $rbd->hierarchy=$request->hierarchy;
        $rbd->save();

        Session::flash('success','RBD has been successfully added to database');
        return redirect()->route('rbd.create');
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

        $cabins=Cabin::all();
        $rbd=Rbd::find($id);
        return view('backend.rbd.edit')->withRbd($rbd)->withCabins($cabins);
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
            'rbd'=> 'required | alpha | max:1',
            'cabin_id'=>'required | integer',
            'hierarchy'=>'required | integer | max:999'
        ));

        $rbd=Rbd::find($id);
        $rbd->rbd=$request->input('rbd');
        $rbd->cabin_id=$request->input('cabin_id');
        $rbd->hierarchy=$request->input('hierarchy');
        $rbd->save();

        //set flash data with success message
        Session::flash('success','RBD data has been successfully updated in database');
        
        return redirect()->route('rbd.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rbd=Rbd::findorFail($id);
        $rbd->delete();
        //return redirect()->Route('invoices.showinquiries');
        Session::flash('success','Selected RBD has been successfully deleted from database');
        return redirect()->route('rbd.index');
    }
}
