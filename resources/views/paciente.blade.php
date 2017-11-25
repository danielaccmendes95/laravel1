@extends('layouts.app')


@section('content')
	<h1>Pacientes</h1>
	
	<a href="/add_paciente">
 		<img src="{{ asset('images/icon_add.png') }}" style="width:60px;height:30px;border:0;" id="btn_add">
	</a>
	@if(count($paciente) > 0)
		@foreach($paciente as $pac)
			<div id="pacli" class="paclic">
				<ul class="list-group">
					<a href="{{ url('/paciente/' . $pac->id . '/info_paciente') }}"><li class="list-group-item">Nome: {{$pac->name}} </li></a>
				</ul>
			</div>
		@endforeach
	@else <h3>Não existem pacientes na Base de Dados</h3>
	@endif
	
@endsection

@section('sidebar')
	@parent
	<p>this is appended to side bar</p>
@endsection