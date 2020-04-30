<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timezone extends Model
{
    public function city()
    {
        return $this->hasMany('App\City');
    }
}
