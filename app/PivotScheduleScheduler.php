<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PivotScheduleScheduler extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'schedule_id','day'
    ];
}
