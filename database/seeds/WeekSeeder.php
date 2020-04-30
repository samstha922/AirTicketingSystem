<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('week_days')->truncate();

        DB::table('week_days')->insert([
            [
                'day'            => 'Sunday',
                'code'           => 'SUN',
            ],
            [
                'day'            => 'Monday',
                'code'           => 'MON',
            ],
            [
                'day'            => 'Tuesday',
                'code'           => 'TUE',
            ],
            [
                'day'            => 'Wednesday',
                'code'           => 'WED',
            ],
            [
                'day'            => 'Thursday',
                'code'           => 'THU',
            ],
            [
                'day'            => 'Friday',
                'code'           => 'FRI',
            ],
            [
                'day'            => 'Saturday',
                'code'           => 'SAT',
            ]
            
        ]);
    }
}
