<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    public function pacientes(){
    	return $this->hasMany('App\Paciente');
    }
}
