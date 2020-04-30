<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //factory(App\City::class, 20)->create();
        $this->call(PermissionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(WeekSeeder::class);
        $this->call(TimezoneSeeder::class);
        
        //$this->call(SuperUser::class);
    }
}
