<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function getHome(){
   		return view('home');
   }

    public function getContact(){
   		return view('contact');
   }

   public function getProfissional(){
   		return view('profissional');
   }

    public function getAddProf(){
      return view('add_prof');
   }
   
   public function getAddPaciente(){
      return view('add_paciente');
   }

}
