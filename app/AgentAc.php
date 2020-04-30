<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgentAc extends Model
{
    protected $table = "agent_ac";

    protected $fillable = [
    	'user_id', 'billing_currency', 'balance'
    ];
}
