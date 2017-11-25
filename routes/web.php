<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
	'uses' => 'PagesController@getHome',
	'as' => 'getHome',
]);

Route::get('/home', [
	'uses' => 'PagesController@getHome',
	'as' => 'getHome',
]);

Route::get('/contact', [
	'uses' => 'PagesController@getContact',
	'as' => 'getContact',
	'middleware' => 'roles',
	'roles' => ['Admin']
]);

Route::post('/contact/submit', function (\Illuminate\Http\Request $request, \Illuminate\Mail\Mailer $mailer){
	//dd(new \App\Mail\MyMail($request->input('title')));
	$mailer->to($request->input('email'))
		->send(new \App\Mail\MyMail($request->input('title')));
	return redirect('/')->with('success', 'E-mail Enviado');
})->name('contact');


Route::get('/messages', 'MessagesController@getMessages');

Route::get('/profissional', [
	'uses'=>'ProfissionalController@getProfissional',
	'as'=>'getProfissional',
	'middleware' => 'roles',
	'roles' => ['Admin']
]);

Route::get('/profissional/{id}/info_profissional',[
 	'uses' => 'ProfissionalController@editProfissional',
 	'as'=>'getinfoprof',
 	'middleware' => 'roles',
 	'roles' => ['Admin']
]);


Route::get('/paciente/{id}/info_paciente', [
 'uses' => 'PacienteController@infoPaciente',
 'as' => 'getinfopac',
 'middleware' => 'roles',
 'roles' =>['Admin', 'Profissional de Saúde']
]);

Route::get('/paciente', [
	'uses' => 'PacienteController@getPacientes',
	'as' => 'getpac',
	'middleware' => 'roles',
	'roles' => ['Admin', 'Profissional de Saúde']
]);

Route::get('/add_prof', [
	'uses' => 'PagesController@getAddProf',
	'as' => 'addprof',
	'middleware' => 'roles',
	'roles' => ['Admin']

]);

Route::get('/add_paciente', [
	'uses' =>'PacienteController@getFormInfo',
	'as' => 'addpac',

]);

Route::post('/profissional/submit', [
	'uses' =>'ProfissionalController@submit',
	'as' => 'addprofsubmit',
	'middleware' => 'roles',
	'roles' => ['Admin']
]);

Route::post('/paciente/submit', [
	'uses' =>'PacienteController@submit',
	'as' => 'addpacsubmit',
	'middleware' => 'roles',
	'roles' => ['Admin']
]);

Route::get('/paciente/{id}/delete_paciente', [
	'uses' =>'PacienteController@deletePaciente',
	'as' => 'deletepac',
	'middleware' => 'roles',
	'roles' => ['Admin']
]);

Route::get('/profissional/{id}/delete_profissional', [
	'uses' =>'ProfissionalController@deleteProfissional',
	'as' => 'deleteprof',
	'middleware' => 'roles',
	'roles' => ['Admin']
]);

Route::get('/registar/{token}', [
	'uses' =>'VerifyController@verify',
	'as' => 'verify'
]);

Route::post('/registar/submit', [
	'uses' =>'VerifyController@registar',
	'as' => 'verifyreg'
]);

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
