<?php

namespace App;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Scheduler extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date_from','date_to', 'flight_id','rbd_id','seat','depart_time','arrive_time'
    ];

    public function flight()
    {
        return $this->belongsTo('App\Flight','flight_id','id');
    }

    public function generateDateRange(Carbon $start_date, Carbon $end_date)
	{
	    $dates = [];

	    for($date = $start_date; $date->lte($end_date); $date->addDay()) {
	        $dates[] = $date->format('d-m-Y');
	    }

	    return $dates;
	}


	public function dateDayRange($start_date,$last_date)
	{

		$dates = range(strtotime($start_date), strtotime($last_date),86400);
		$days = array();

		array_map(function($v)use(&$days){
		        if(date('D',$v) == 'Sun'){
		            $days['1'][] = date('Y-m-d', $v);
		        }elseif(date('D',$v) == 'Mon'){
		            $days['2'][] = date('Y-m-d', $v);
		        }elseif(date('D', $v) == 'Tue'){
		            $days['3'][] = date('Y-m-d', $v);
		        }elseif(date('D',$v) == 'Wed'){
		            $days['4'][] = date('Y-m-d', $v);
		        }elseif(date('D', $v) == 'Thu'){
		            $days['5'][] = date('Y-m-d', $v);
		        }elseif(date('D',$v) == 'Fri'){
		            $days['6'][] = date('Y-m-d', $v);
		        }elseif(date('D',$v) == 'Sat'){
		            $days['7'][] = date('Y-m-d', $v);
		        }
		    }, $dates);

		return $days;
	}

	public function getMax()
	{
		$scheduler = Scheduler::max('id');
		if (!$scheduler)
		{
			return 1;
		}
		return $scheduler;
	}
}
