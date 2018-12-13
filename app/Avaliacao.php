<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    protected $table = 'avaliacoes';

    public motoristas(){
    	return $this->belongsTo('App\Motorista');
    }
}
