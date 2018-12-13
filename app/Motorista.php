<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motorista extends Model
{
    function users(){
    	return $this->belongsTo('App\User');
    }

    protected $fillable = [
    	'id',
		'nome',
		'cpf',
		'telefone',
		'numero_cnh',
		'sexo',
		'tempo_profissao',
		'categoria',
		'user_id',
	];
}
