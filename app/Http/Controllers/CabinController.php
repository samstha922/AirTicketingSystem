<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Cabin;
use Session;

class CabinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cabins= Cabin::orderBy('id')->get();
        //$i=($cabins->currentPage()-1)*$cabins->perPage()+1;
        return view('backend.cabin.index')->withCabins($cabins);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.cabin.create');
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
            'cabin'=> 'required'
        ));

        $cabin=new Cabin;
        $cabin->cabin=$request->cabin;
        $cabin->save();

        Session::flash('success','Cabin has been successfully added');
        return redirect()->route('cabin.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*$city=City::find($id);
        return view('backend.city.show')->with('city',$city);*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cabin=Cabin::find($id);
        return view('backend.cabin.edit')->withCabin($cabin);
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
            'cabin'=> 'required'
        ));
        $cabin=Cabin::find($id);
        $cabin->cabin=$request->input('cabin');
        $cabin->save();
        //set flash data with success message
        Session::flash('success','Selected Cabin has been successfully updated');
        //redirect with flash data to posts.show
        return redirect()->route('cabin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cabin=Cabin::findorFail($id);
        $cabin->delete();
        //return redirect()->Route('invoices.showinquiries');
        Session::flash('success','Selected Cabin has been deleted');
        return redirect()->route('cabin.index');
    }
}
