<?php

namespace App;
use App\City;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'flight_no','source_id', 'destination_id'
    ];

    public function getFlight($id)
    {
        $flight_no = Flight::select()->first();
        $city = new City;
        $source = $city->getCity($flight_no->source_id);
        $destination = $city->getCity($flight_no->destination_id);
        $flight_name = $source.'-'.$destination.'-'.$flight_no->flight_no;
        return $flight_name;
    }

     public function schedule()
    {
        return $this->belongsTo('App\Schedule','');
    }

    /**
     * has one source
     * @param string $value [description]
     */
    public function source()
    {
        return $this->hasOne('App\City', 'id', 'source_id');
    }

    /**
     * has one destination
     * @param string $value [description]
     */
    public function destination()
    {
        return $this->hasOne('App\City', 'destination_id');
    }
}
