<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{

    public function profissional(){
    	return $this->belongsTo('App\User', 'funcionario');
    }

    public function genderl(){
    	return $this->belongsTo('App\Gender', 'gender');
    }
}
