<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class City extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'city_name','iata_code', 'icao_code','airport_name','timezone'
    ];

    public function timezone()
    {
        return $this->belongsTo('App\Timezone');
    }
    
    public function getCity($id)
    {
    	$city_name = City::select('iata_code')->where('id',$id)->first();
    	return $city_name->iata_code;
    }

    public function getDay($id,$value)
    {
    	$pivot = DB::table('schedule_week_pivot')->where('schedule_id',$id)->get();
    	$match = 0;
    	foreach ($pivot as $day) {
    		if($day->week_id == $value)
    		{
    			$match++;
    		}
    	}
    	if($match > 0)
    	{
    		return true;
    	}
    	else
    	{
    		return false;
    	}
    }

    public function getDays($id)
    {
    	$days = "";
    	$counter = 0;
    	$pivot_day = DB::table('schedule_week_pivot')->select('week_id')->where('schedule_id',$id)->get();
    	$dayCount = count($pivot_day);
    	foreach ($pivot_day as $day) {
            $week_day = DB::table('week_days')->select('day')->where('id',$day->week_id)->first();
    		$counter++;
            if ($counter < $dayCount) {
    		$days.=$week_day->day.",";
	    	}
	    	else
	    	{
	    		$days.=$week_day->day;
	    	}
    	}
    	return $days;
    }
}
