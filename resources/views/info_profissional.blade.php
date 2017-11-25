@extends('layouts.app')


@section('content')
	<h1>Profissionais de Saúde</h1>
	<a href="/edit_prof">
 		<img src="{{ asset('images/icon_edit.png') }}" style="width:30px;height:30px;border:0;" id="btn_edit">
	</a>
	<a href="{{ url('/profissional/' . $profissional->id . '/delete_profissional') }}">
 		<img src="{{ asset('images/icon_delete.png') }}" style="width:30px;height:30px;border:0;" id="btn_delete">
	</a>
	@if(count($profissional) > 0)
		<div id="info_prof_li">
			<ul class="list-group">
				<li class="list-group-item">Nome: {{$profissional->name}} </li></a>
				<li class="list-group-item">Username: {{$profissional->username}} </li></a>
				<li class="list-group-item">E-mail: {{$profissional->email}} </li></a>
			</ul>
		</div>

	<div id="info_paci_li">
		<h2>Pacientes Associados:</h2>
			<ul class="list-group">
				@foreach($profissional->pacientes as $pac)
				<a href="{{ url('/paciente/' . $pac->id . '/info_paciente') }}"><li class="list-group-item">Nome: {{$pac->name}} </li></a>
				@endforeach
			</ul>
		</div>
	@else <h3>Não existem profissionais na Base de Dados</h3>
	@endif
@endsection

@section('sidebar')
	@parent
	<p>this is appended to side bar</p>
@endsection