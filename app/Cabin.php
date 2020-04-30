<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cabin extends Model
{
    public function rbd()
    {
        return $this->hasMany('App\Rbd');
    }

	public function getCabin($cabin_id){
		$cabin = Cabin::where('id',$cabin_id)->first();
		return $cabin->cabin;
	}
}
