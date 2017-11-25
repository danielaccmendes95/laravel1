@extends('layouts.app')

@section('content')
	<h1>Adicionar Registo</h1>

	{!! Form::open(['url' => 'registar/submit']) !!}

    	<div class="form-group">
    		{{Form::label('username', 'Username')}}
    		{{Form::text('username', '', ['class' => 'form-control', 'placeholder' => 'Introduza o seu username'])}}
    	</div>

        <div class="form-group">
            {{Form::label('password', 'Password')}}
            {{Form::password('password')}}
        </div>

        <div>
             <input type="hidden" name="_token" value="{{$token}}">
        </div>
    	
    	<div>
    		{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    	</div>
	{!! Form::close() !!}
@endsection
