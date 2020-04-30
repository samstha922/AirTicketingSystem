<?php
namespace App\Injection;

use App\Role;

class UserForm{

	protected $role;

	public function __construct(){
		$this->role =  Role::get();
	}
	
	public function r()
	{
		$admin = $this->role->pluck('display_name', 'id');
		return $admin;
	}
}