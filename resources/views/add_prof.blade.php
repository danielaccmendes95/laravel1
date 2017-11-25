@extends('layouts.app')

@section('content')
	<h1>Adicionar Registo</h1>
	{!! Form::open(['url' => 'profissional/submit']) !!}
    	<div class="form-group">
    		{{Form::label('name', 'Nome')}}
    		{{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Introduza o nome do profissional de saúde'])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('email', 'E-Mail')}}
    		{{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Introduza o e-mail do profissional de saúde'])}}
    	</div>
    	<div>
    		{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    	</div>

	{!! Form::close() !!}
@endsection