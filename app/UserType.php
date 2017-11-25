<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
	//protected $table = 'user_types';
    public function users(){
    	return $this->belongsToMany('App\User', 'user_role');
    	//return $this->belongsToMany('App\User', 'user_role', 'user_id', 'tipo_id');
    }
}
