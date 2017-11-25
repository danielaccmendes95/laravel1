<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class VerifyController extends Controller
{
    public function verify($token){
    	return view('registar')->with('token', $token);
    }

    public function registar(Request $request){

    	    $this->validate($request, [
    		'username' => 'required',
    		'password' => 'required'
    	]);

    	$user = User::where('token', $request->input('_token'))->firstOrFail();
    	$user->update(['username' => $request->input('username')]);
    	dd($user->update(['password' => bcrypt($request->input('password'))]));

    	return redirect('/')->with('success', 'Registo Adicionado');
    }
}
