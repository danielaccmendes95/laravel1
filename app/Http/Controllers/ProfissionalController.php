<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserType;
use DB;
use App\Notifications\VerifyEmail;

class ProfissionalController extends Controller
{
     public function getProfissional(){
        $profissional = DB::select(DB::raw("SELECT *
                FROM users u, user_role r
                WHERE r.tipo_id = 2
                AND u.id=r.user_id"));
        //dd($user->tipos[0]->tipo);
    	return view('profissional')->with('profissional', $profissional);
    }

    public function editProfissional($id){
    	$profissional = User::where('id', '=', $id)->first();
      
    	return view('info_profissional')->with('profissional', $profissional);
    }

     public function submit(Request $request){

    	$this->validate($request, [
    		'name' => 'required',
    		'email' => 'required',
    	]);

    	$user = new User;
    	$user->name = $request->input('name');
    	$user->email = $request->input('email');
        $user->token = str_random(25);
        $user->save();
         $tipo= UserType::where('id', '=' , 2)->first();
        //var_dump($user);
        $user->tipos()->attach($tipo);
        //dd($user);
        $user->notify(new VerifyEmail($user));


    	return redirect('/')->with('success', 'Message Sent');
    }

     public function deleteProfissional($id){
        User::destroy($id);
        return redirect('/profissional')->with('success', 'Profissional Apagado');
    }
}
