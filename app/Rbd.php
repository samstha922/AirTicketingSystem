<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rbd extends Model
{
     public function cabin()
    {
        return $this->belongsTo('App\Cabin');
    }
    
     public function getRbd($id){
	    $rbd = Rbd::where('id',$id)->first();
	    // echo "<pre>";
	    // var_dump($city->iata_code);
	    // die();

	    return $rbd->rbd;
	  }
}
