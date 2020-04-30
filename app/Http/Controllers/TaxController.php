<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tax;
use Session;

class TaxController extends Controller
{
    public function index()
    {
        $taxes= Tax::orderBy('id')->get();
        //$i=($taxes->currentPage()-1)*$taxes->perPage()+1;
        // dd($cities->total() );
        return view('backend.tax.index')->withTaxes($taxes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.tax.create');
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
            'tax_head'=> 'required',
            'local_price'=>'required | numeric',
            'usd_price'=>'required | numeric',
            'active'=>'required'
        ));



        $tax=new Tax;

        $tax->tax_head=$request->tax_head;
        $tax->local_price=$request->local_price;
        $tax->usd_price=$request->usd_price;
        $tax->active=$request->active;
        


        $tax->save();

        Session::flash('success','New Tax Rate has been successfully added');
        return redirect()->route('tax.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$tax=City::find($id);
        //return view('backend.tax.show')->with('tax',$tax);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tax=Tax::find($id);
        return view('backend.tax.edit')->withTax($tax);
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
            'tax_head'=> 'required',
            'local_price'=>'required|numeric',
            'usd_price'=>'required|numeric',
            'active'=>'required'
        ));

        $tax=Tax::find($id);

        $tax->tax_head=$request->tax_head;
        $tax->local_price=$request->local_price;
        $tax->usd_price=$request->usd_price;
        $tax->active=$request->active;

        $tax->save();
        //set flash data with success message
        Session::flash('success','New Tax Rate has been successfully updated');
        //redirect with flash data to posts.show
        return redirect()->route('tax.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tax=Tax::findorFail($id);
        $tax->delete();
        Session::flash('success','Specified Tax Rate has been successfully deleted');
        return redirect()->route('tax.index');
    }
}

