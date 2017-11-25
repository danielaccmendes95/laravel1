<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;
use App\User;
use App\Gender;
use DB;

class PacienteController extends Controller
{
    public function getPacientes(){
    	$paciente = Paciente::all();

    	return view('paciente')->with('paciente', $paciente);

    }

   public function infoPaciente($id){
        $paciente = Paciente::where('id', '=', $id)->first();
        return view('info_paciente')->with('paciente', $paciente);
    }


     public function submit(Request $request){


    	$this->validate($request, [
    		'name' => 'required',
    		'birthdate' => 'required',
            'health_hist' => 'required',
    	]);



    	$paciente = new Paciente;
    	$paciente->name = $request->input('name');
    	$paciente->birthday = $request->input('birthdate');
    	$paciente->gender = $request->get('select_gender');
    	$paciente->health_hist = $request->input('health_hist');
        $paciente->funcionario = $request->get('select_prof');
    	$paciente->save();

    	return redirect('/paciente')->with('success', 'Paciente Adicionado');
    }


    public function getFormInfo(){
    	$profissionais = DB::select(DB::raw("SELECT *
                FROM users u, user_role r
                WHERE r.tipo_id = 2
                AND u.id=r.user_id"));
    	$gender = Gender::select('gender', 'id')->get();
    	return view('add_paciente', compact('profissionais', 'gender'));
    }

    public function deletePaciente($id){
        Paciente::destroy($id);
        return redirect('/paciente')->with('success', 'Paciente Apagado');
    }

}
