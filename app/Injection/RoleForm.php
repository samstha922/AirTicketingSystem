<?php 

namespace App\Injection;

use App\Permission;
use App\Role;
use App\UserType;
use Auth;
use DB;

class RoleForm{

	protected $permission;

	public function __construct(){
		$this->permission = Permission::get();
	}

	public function user_model(){
		$user_model = $this->permission->where('catagory','user-catagory')->pluck('name', 'id');
		return $user_model;
	}
	
	public function role_model(){
		$role_model = $this->permission->where('catagory','role-catagory')->pluck('name', 'id');
		return $role_model;
	}

	public function cabin_model(){
		$cabin_model = $this->permission->where('catagory','cabin-catagory')->pluck('name', 'id');
		return $cabin_model;
	}

	public function rbd_model(){
		$rbd_model = $this->permission->where('catagory','rbd-catagory')->pluck('name', 'id');
		return $rbd_model;
	}

	public function flight_model(){
		$flight_model = $this->permission->where('catagory','flight-catagory')->pluck('name', 'id');
		return $flight_model;
	}

	public function fares_model(){
		$fares_model = $this->permission->where('catagory','fare-catagory')->pluck('name', 'id');
		return $fares_model;
	}

	public function schdule_model(){
		$schdule_model = $this->permission->where('catagory','schedule-catagory')->pluck('name', 'id');
		return $schdule_model;
	}

	public function schduler_model(){
		$schduler_model = $this->permission->where('catagory','scheduler-catagory')->pluck('name', 'id');
		return $schduler_model;
	}

	public function checked_permission($permission, $role_id){
		$permission = DB::table('permission_role')
						->where('role_id',$role_id)		
						->where('permission_id', $permission)
						->exists();
		if($permission){
			return true;
		}else{
			return false;
		}				
	}
}