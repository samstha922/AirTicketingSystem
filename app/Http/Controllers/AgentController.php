<?php

namespace App\Http\Controllers;

use App\AgentAc;
use App\AgentDetail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Yajra\Datatables\Datatables;
use Auth;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('backend.agent.index');
    }


    public function datatable()
    {
       $user = DB::table('users')
            ->leftJoin('agent_details', 'users.id', '=', 'agent_details.user_id')
            ->where('user_type', '0')
            ->select('users.id', 'users.name', 'users.email', 'agent_details.org', 'agent_details.billing_currency')
            ->get();
       return Datatables::of($user)
            ->addColumn('action', function ($user)
            {
                $buttons = '<a href="agent/ac/create/'.$user->id.'" class="btn btn-success"><i class="fa fa-money"></i></a>
                <a type="button" href="'.url('agent/edit')."/".$user->id.'" class="editP btn btn-info"><i class="fa fa-edit"></i></a>
                <a href="agent/show/'.$user->id.'" class="btn btn-success"><i class="fa fa-eye"></i></a>
                <a type="button" href="'.url('agent/delete')."/".$user->id.'" class="editP btn btn-danger"><i class="fa fa-trash"></i></a>';
                return $buttons;
            })->make();
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.agent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
            'address' => 'required',
            'contact' => 'required | regex : /^[0-9-+]+$/',
            'contact_person' => 'required | regex : /^[a-zA-Z ]+$/',
            'phone_no' => 'required | regex : /^[0-9-+]+$/',
            'mobile_no' => 'required | regex : /^[0-9-+]+$/',
            'billing_currency' => 'required'
        ],
        [
            'name.regex' => 'Name only should contain letter and space'
        ]);


        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->contact = $request->contact;
        $user->password = Hash::make($request->password);
        $user->created_by ='1';
        $user->active = '0';
        $user->first_login = '0';
        $user->user_type = '0';
        $user->save();


        $detail =  new AgentDetail();
        $detail->user_id = $user->id;
        $detail->contact_person = $request->contact_person;
        $detail->phone_no = $request->phone_no;
        $detail->mobile_no = $request->mobile_no;
        $detail->org = $request->org;
        $detail->billing_currency = $request->billing_currency;
        $detail->save();
        return back()->with('success','User created successfully');
    }


    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $agent = DB::table('users')
            ->leftJoin('agent_details', 'users.id', '=', 'agent_details.user_id')
            ->where('user_id', $id)
            ->select('users.id', 'users.name', 'users.email', 'agent_details.org', 'agent_details.phone_no','agent_details.billing_currency', 'agent_details.mobile_no')
            ->first();
        return view('backend.agent.show',compact('agent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user_id = $id;
        $agent = DB::table('users')
                ->leftJoin('agent_details', 'users.id', '=', 'agent_details.user_id')
                ->where('users.id', $user_id)
                ->select('users.*','agent_details.*')
                ->first();

        return view('backend.agent.edit',compact('agent'));
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
        $this->validate($request, [
            'name' => 'required',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
            'address' => 'required',
            'contact' => 'required | regex : /^[0-9-+]+$/',
            'contact_person' => 'required | regex : /^[a-zA-Z ]+$/',
            'phone_no' => 'required | regex : /^[0-9-+]+$/',
            'mobile_no' => 'required | regex : /^[0-9-+]+$/',
            'billing_currency' => 'required'
        ],

        [
            'name.regex' => 'Name only should contain letter and space'
        ]);


        /**
         * email should not be same to other while updateing
         * but could be same to same user
         */
        

        $input = $request->all();
        
        $email_exit = User::where('email', $request->get('email'))
                            ->where('id', '!=', $id)
                            ->exists();
        if($email_exit){
            return back()->with(['email_exit'=>'Email already exit']);
        }

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->contact = $request->contact;
        $user->password = Hash::make($request->password);
        $user->created_by ='1';
        $user->active = '0';
        $user->first_login = '0';
        $user->user_type = '0';
        $user->save();


        $detail =  AgentDetail::where('user_id', $id)->first();
        $detail->user_id = $user->id;
        $detail->contact_person = $request->contact_person;
        $detail->phone_no = $request->phone_no;
        $detail->mobile_no = $request->mobile_no;
        $detail->org = $request->org;
        $detail->billing_currency = $request->billing_currency;
        $detail->save();

        return redirect('agent/')->with('success','Agent registration updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect('agent/')->with('success','User deleted successfully');
    }
    /**
     *
     * +++++++++++++++++++++++++ Agent Account ++++++++++++++++++++++++
     */


    public function ac_create(Request $request, $id)
    {
        $debit_credit = AgentAc::where('user_id', $id)->get();

        $total = 0;
        
        foreach($debit_credit as $d){
            $total = $total + $d->debit - $d->credit;

        }
        
        $agent_balance = AgentAc::where('user_id', $id)->orderBy('id','desc')->paginate(5);
        return view('backend.agent_ac.create', compact('id', 'agent_balance', 'total'));
    }
    

    public function ac_store(Request $request)
    {
        $this->validate($request, [
            'debit' => 'required|numeric|min:1'
        ]);
        
        $agentAc = new AgentAc();
        $agentAc->user_id = $request->user_id;
        $agentAc->debit = $request->debit;
        $agentAc->credit = '0';
        $agentAc->save();
        
        return back()->with('success','Balance added successfully');
    }

    public function search(Request $request){
        return view('frontend.search_page.search_detail',compact('request'));
    }



}
