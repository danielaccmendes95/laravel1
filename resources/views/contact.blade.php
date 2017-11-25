
@extends('layouts.app')

@section('content')
	<h1>Contacts</h1>
	 {!! Form::open(['url' => 'contact/submit']) !!}
    	<div class="form-group">
    		{{Form::label('title', 'Title')}}
    		{{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Enter Title'])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('email', 'E-Mail Address')}}
    		{{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'example@test.com'])}}
    	</div>

    	<div class="form-group">
    		{{Form::label('message', 'Message')}}
    		{{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter a Message'])}}
    	</div>

    	<div>
    		{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    	</div>
        {{csrf_field()}}
	{!! Form::close() !!}
@endsection