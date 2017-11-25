@extends('layouts.app')


@section('content')
	<h1>Paciente</h1>
	<a href="/edit_paciente">
 		<img src="{{ asset('images/icon_edit.png') }}" style="width:30px;height:30px;border:0;" id="btn_edit">
	</a>
	<a href="{{ url('/paciente/' . $paciente->id . '/delete_paciente') }}">
 		<img src="{{ asset('images/icon_delete.png') }}" style="width:30px;height:30px;border:0;" id="btn_delete">
	</a>
	
	
	
	@if(count($paciente) > 0)
		<div id="info_paciente_li">
			<ul class="list-group">
				<li class="list-group-item"> Primeiro Nome: {{$paciente->name}} </li>
				<li class="list-group-item"> Data de Nascimento: {{$paciente->birthday}} </li>
				<li class="list-group-item"> Género: {{$paciente->genderl->gender}} </li>
				<li class="list-group-item"> Histórico de Saúde: {{$paciente->health_hist}} </li>
				<li class="list-group-item"> Profissional de Saúde: {{$paciente->profissional->name}} </li>
			</ul>
		</div>
		
	@else <h3>Não existem profissionais na Base de Dados</h3>
	@endif
@endsection

@section('sidebar')
	@parent
	<p>this is appended to side bar</p>
@endsection