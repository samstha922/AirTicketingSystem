<?php

namespace App;

use App\Schedule;
use App\City;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'flight_id','depart_time', 'arrive_time'
    ];

    public function flight()
    {
        return $this->belongsTo('App\Flight','flight_id','id');
    }

     public function week()
    {
        return $this->belongsToMany('App\Week', 'schedule_week_pivot');
    }

}
