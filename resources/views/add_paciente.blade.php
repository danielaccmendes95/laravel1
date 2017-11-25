@extends('layouts.app')

@section('content')
	<h1>Adicionar Paciente</h1>
	{!! Form::open(['url' => 'paciente/submit']) !!}
    	
        <div class="form-group">
            {{Form::label('name', ' Nome')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Introduza o nome do paciente'])}}
        </div>
    	<div class="form-group">
    		{{Form::label('birthdate', 'Data de Nascimento')}}
    		{{Form::date('birthdate', '', ['class' => 'form-control'])}}
    	</div>

        <div class="form-group">
            {{Form::label('gender', 'Género')}}
            <select class="form-control" name="select_gender" id="select_gender">
                @foreach($gender as $gen)
                    <option value="{{$gen->id}}">{{$gen->gender}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            {{Form::label('health_hist', 'Histórico de Saúde')}}
            {{Form::textArea('health_hist', '', ['class' => 'form-control', 'placeholder' => 'Introduza o histórico de saúde do paciente'])}}
        </div>

        <div class="form-group">
            {{Form::label('prof_saude', 'Profissional de Saúde')}}
            <select class="form-control" name="select_prof" id="select_prof">
                @foreach($profissionais as $prof)
                    <option value="{{$prof->id}}">{{$prof->name}}</option>
                @endforeach
            </select>
        </div>



    	<div>
    		{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    	</div>

	{!! Form::close() !!}
@endsection