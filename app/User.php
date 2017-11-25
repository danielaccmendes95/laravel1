<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\DB;

class User extends Authenticatable
{
    protected $primaryKey = 'id';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function pacientes(){
        return $this->hasMany('App\Paciente', 'funcionario');
    }

    public function tipos(){
        return $this->belongsToMany('App\UserType', 'user_role', 'user_id', 'tipo_id');
        // return $this->belongsToMany('App\UserType', 'user_role', 'tipo_id', 'user_id');
    }

    public function hasAnyRole($roles){
        if(is_array($roles)){
            foreach ($roles as $role) {
                if($this->hasRole($role)){
                    return true;
                }
            }
        } else{
            if($this->hasRole($roles)){
                return true;
            }
        }
        return false;
    }

    public function hasRole($role){

         //$profissional = DB::select(DB::raw("SELECT *
           //     FROM users u, user_role r
             //   WHERE r.tipo_id = 2
               // AND u.id=r.user_id"));
       
        if($this->tipos[0]->tipo == $role){
            return true;
        }
        return false;

    }


}

