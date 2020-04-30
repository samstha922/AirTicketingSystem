<?php

namespace App\Http\Controllers;

use App\AgentAc;
use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use Auth;
use DB;
use Hash;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        return view('backend.users.index',compact('users'));
    }


    public function datatable(){
       $user = User::where('user_type', '1')->select(['id','name', 'email']);
       return Datatables::of($user)
        ->addColumn('action', function ($user)
            {
                $buttons = '<a type="button" href="'.url('admin/edit')."/".$user->id.'" class="editP btn btn-info"><i class="fa fa-edit"></i></a>
                <a type="button" href="'.url('admin/show')."/".$user->id.'" class="editP btn btn-success"><i class="fa fa-eye"></i></a>
                <a type="button" href="'.url('admin/delete')."/".$user->id.'" class="editP btn btn-danger"><i class="fa fa-trash"></i></a>';
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
        return view('backend.users.create');
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
            'name' => 'required | regex : /^[a-zA-Z ]+$/',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
            'address' => 'required',
            'contact' => 'required | regex : /^[0-9-+]+$/',
            'role' => 'required'
        ],
        [
            'name.regex' => 'Name only should contain letter and space'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $input['created_by'] = '1';
        $input['active'] = '0';
        $input['first_login'] = '0';
        $input['user_type'] = '1';
        
        $this_user = User::create($input);
        /**
         * 1) get roles from $request->role[]
         * 2) we get array, include in "" value i.e. placeholder
         * 3) avoid this "" data using array_except, array_except 
         * filter form key, so flip array for making "" key
         * 4) if $role is 1 then save else return
         * @var array
         */
        $roles = array_except(array_flip($request->get('role')), "");
        if(count($roles) == 1){
            $this_user->roles()->attach(array_keys($roles));
        }else{
            return back()->withInput()->with(['multiple_role'=>'please select only one role']);
        }
        
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
        $user = User::find($id);
        return view('backend.users.show',compact('user'));
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
        $user = User::find($id);
        $roles = Role::pluck('display_name','id');
        $userRole = $user->roles->pluck('id','id')->toArray();
        return view('backend.users.edit',compact('user','roles','userRole', 'user_id'));
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
            'name' => 'required | regex : /^[a-zA-Z ]+$/',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
            'address' => 'required',
            'contact' => 'required | regex : /^[0-9-+]+$/'
        ],

        [
            'name.regex' => 'Name only should contain letter and space'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $input['created_by'] = Auth::user()->id;
        $input['active'] = '0';
        $input['first_login'] = '0';
        
        $user = User::find($id);
        $user->update($input);

        /**
         * 1) get roles from $request->role[]
         * 2) we get array, include in "" value i.e. placeholder
         * 3) avoid this "" data using array_except, array_except 
         * filter form key, so flip array for making "" key
         * 4) if $role is 1 then save else return
         * @var array
         */
        
        $empty_role = array_where($request->get('role'), function ($value, $key) {
            if($value !== ""){
                return 1;
            }
        });

        if(count($empty_role) > 0){
            $roles = array_except(array_flip($request->get('role')), "");
            if(count($roles) == 1){
                $user->roles()->sync(array_keys($roles));
            }else{
                return back()->withInput()->with(['multiple_role'=>'please select only one role']);
            }
        }
        

        /**
         * email should not be same to other while updateing
         * but could be same to same user
         */
        $email_exit = User::where('email', $request->get('email'))
                            ->where('id', '!=', $user->id)
                            ->exists();
        if($email_exit){
            return back()->with(['email_exit'=>'Email already exit']);
        }

        
        return redirect('admin/')->with('success','User Updated successfully');
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
        return redirect('admin/')->with('success','User deleted successfully');
    }
}