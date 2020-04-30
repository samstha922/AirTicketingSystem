<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
        	[
                'name' => 'user-create',
        		'display_name' => 'Create User',
        		'description' => 'can create user',
                'catagory' => 'user-catagory'
        	],
        	[
        		'name' => 'user-edit',
        		'display_name' => 'Edit User',
        		'description' => 'can edit the user',
                'catagory' => 'user-catagory'
        	],
        	[
        		'name' => 'user-delete',
        		'display_name' => 'Delete user',
        		'description' => 'can delete the user',
                'catagory' => 'user-catagory'
        	],
            [
                'name' => 'user-show',
                'display_name' => 'Show the user list',
                'description' => 'can see the user list',
                'catagory' => 'user-catagory'
            ],
            /*role define*/
            [
                'name' => 'role-create',
                'display_name' => 'Create role',
                'description' => 'can create role',
                'catagory' => 'role-catagory'
            ],
            [
                'name' => 'role-edit',
                'display_name' => 'Edit role',
                'description' => 'can edit the role',
                'catagory' => 'role-catagory'
            ],
            [
                'name' => 'role-delete',
                'display_name' => 'Delete role',
                'description' => 'can delete the role',
                'catagory' => 'role-catagory'
            ],
            [
                'name' => 'role-show',
                'display_name' => 'Show the user role',
                'description' => 'can see the user role',
                'catagory' => 'role-catagory'
            ],
            /*cabin permission*/
            [
                'name' => 'cabin-create',
                'display_name' => 'Cabin stock',
                'description' => 'can create cabin',
                'catagory' => 'cabin-catagory'
            ],
            [
                'name' => 'cabin-edit',
                'display_name' => 'Edit cabin',
                'description' => 'can edit the cabin',
                'catagory' => 'cabin-catagory'
            ],
            [
                'name' => 'cabin-delete',
                'display_name' => 'Delete cabin',
                'description' => 'can delete the cabin',
                'catagory' => 'cabin-catagory'
            ],
            [
                'name' => 'cabin-show',
                'display_name' => 'Show the cabin list',
                'description' => 'can see the cabin list',
                'catagory' => 'cabin-catagory'
            ],
            /*rbd rule define*/
            [
                'name' => 'rbd-create',
                'display_name' => 'Create rbd',
                'description' => 'can create rbd',
                'catagory' => 'rbd-catagory'
            ],
            [
                'name' => 'rbd-edit',
                'display_name' => 'Edit rbd',
                'description' => 'can edit the rbd',
                'catagory' => 'rbd-catagory'
            ],
            [
                'name' => 'rbd-delete',
                'display_name' => 'Delete rbd',
                'description' => 'can delete the rbd',
                'catagory' => 'rbd-catagory'
            ],
            [
                'name' => 'rbd-show',
                'display_name' => 'Show the rbd',
                'description' => 'can see the rbd',
                'catagory' => 'rbd-catagory'
            ],
            /*flight rule define*/
            [
                'name' => 'flight-create',
                'display_name' => 'Create flight',
                'description' => 'can create flight',
                'catagory' => 'flight-catagory'
            ],
            [
                'name' => 'flight-edit',
                'display_name' => 'Edit flight',
                'description' => 'can edit the flight',
                'catagory' => 'flight-catagory'
            ],
            [
                'name' => 'flight-delete',
                'display_name' => 'Delete flight',
                'description' => 'can delete the flight',
                'catagory' => 'flight-catagory'
            ],
            [
                'name' => 'flight-show',
                'display_name' => 'Show the flight',
                'description' => 'can see the flight',
                'catagory' => 'flight-catagory'
            ],
            /*fare rule define*/
            [
                'name' => 'fare-create',
                'display_name' => 'Create fare',
                'description' => 'can create fare',
                'catagory' => 'fare-catagory'
            ],
            [
                'name' => 'fare-edit',
                'display_name' => 'Edit fare',
                'description' => 'can edit the fare',
                'catagory' => 'fare-catagory'
            ],
            [
                'name' => 'fare-delete',
                'display_name' => 'Delete fare',
                'description' => 'can delete the fare',
                'catagory' => 'fare-catagory'
            ],
            [
                'name' => 'fare-show',
                'display_name' => 'Show the fare',
                'description' => 'can see the fare',
                'catagory' => 'fare-catagory'
            ],
            /*schedule rule define*/
            [
                'name' => 'schedule-create',
                'display_name' => 'Create schedule',
                'description' => 'can create schedule',
                'catagory' => 'schedule-catagory'
            ],
            [
                'name' => 'schedule-edit',
                'display_name' => 'Edit schedule',
                'description' => 'can edit the schedule',
                'catagory' => 'schedule-catagory'
            ],
            [
                'name' => 'schedule-delete',
                'display_name' => 'Delete schedule',
                'description' => 'can delete the schedule',
                'catagory' => 'schedule-catagory'
            ],
            [
                'name' => 'schedule-show',
                'display_name' => 'Show the schedule',
                'description' => 'can see the schedule',
                'catagory' => 'schedule-catagory'
            ],
            /*schedule rule define*/
            [
                'name' => 'scheduler-create',
                'display_name' => 'Create scheduler',
                'description' => 'can create scheduler',
                'catagory' => 'scheduler-catagory'
            ],
            [
                'name' => 'scheduler-edit',
                'display_name' => 'Edit scheduler',
                'description' => 'can edit the scheduler',
                'catagory' => 'scheduler-catagory'
            ],
            [
                'name' => 'scheduler-delete',
                'display_name' => 'Delete scheduler',
                'description' => 'can delete the scheduler',
                'catagory' => 'scheduler-catagory'
            ],
            [
                'name' => 'scheduler-show',
                'display_name' => 'Show the scheduler',
                'description' => 'can see the scheduler',
                'catagory' => 'scheduler-catagory'
            ]
        ];

        DB::table('permissions')->delete();
        foreach ($permission as $key => $value) {
           Permission::create($value);
        }
    }
}
