<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fare extends Model
{
  protected $fillable = [
      'cabin_id','rbd_id','price_local_oneway','price_usd_oneway','price_local_roundtrip','price_usd_roundtrip','seat'
  ];
}
