<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    protected $table="week_days";

    public function schedule()
    {
        return $this->belongsToMany( 'App\Schedule', 'schedule_week_pivot' );
    }
}
