<?php

use App\Permission;
use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
          'id'=>1,
          'name' => 'su',
          'email' => 'su@gmail.com',
          'password' => bcrypt('root'),
          'address' => 'ktm',
          'contact'=>'contact',
          'code'=> null,
          'created_by'=> null,
          'updated_by'=> null,
          'active'=> 1,
          'user_type'=>1,
          'first_login'=> 1
        ];

        //creaete a super role    
        DB::table('roles')->delete();

        $role = Role::create(['id'=>1, 'name' => 'super user', 'display_name'=>'Super Usr', 'description'=>'Super user']);

        DB::table('users')->delete();
        $user = User::create($user);

        //give super user role
        $user = User::find(1);
        $user->roles()->attach('1');
        
        //assign the all permission to super user
        $surole = Role::find(1);     
        $permission = Permission::pluck('id');    
        foreach($permission as $p) {
            $surole->attachPermission($p);
        }
    }
}
