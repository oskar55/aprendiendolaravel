@extends('admin.template.main')


@section('title','Login')


@section('content')

{!! Form::open(['route'=>'admin.auth.login', 'method'=>'POST']) !!}

	<div class="form-group">
		{!! Form::label('email','Correo Electronico') !!}
		{!! Form::email('email', null, ['class'=>'form-control','placeholder'=>'Correo Electronico']) !!}
	</div>
	
	<div class="form-group">
		{!! Form::label('password','Password') !!}
		{!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'******']) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Ingresar', ['class'=>'btn btn-info']) !!}
	</div>
{!! Form::close() !!}

@endsection