@extends('layouts.app')


@section('content')
	<h1>Profissionais de Saúde</h1>

	<a href="/add_prof">
 		<img src="{{ asset('images/icon_add.png') }}" style="width:60px;height:30px;border:0;" id="btn_add">
	</a>

	@if(count($profissional) > 0)
		@foreach($profissional as $prof)
			<div id="profli" class="profilc">
				<ul class="list-group">
					<a href="{{ url('/profissional/' . $prof->id . '/info_profissional') }}"><li class="list-group-item">Nome: {{$prof->name}} </li></a>
				</ul>
			</div>
		@endforeach
	@else <h3>Não existem profissionais na Base de Dados</h3>
	@endif
@endsection

@section('sidebar')
	@parent
	<p>this is appended to side bar</p>
@endsection