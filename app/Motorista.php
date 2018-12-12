<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motorista extends Model
{
    function users(){
    	return $this->belongsTo('App\User');
    }
}
