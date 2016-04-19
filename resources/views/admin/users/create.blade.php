@extends('admin.template.main')


@section('title','crear usuarios')



@section('content')

	{!! Form::open(['route'=>'admin.users.store','method'=>'POST']) !!}
		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Nombre completo','required']) !!}	
		</div>
		<div class="form-group">
			{!! Form::label('email','Email') !!}
			{!! Form::text('email', null, ['class'=>'form-control','placeholder'=>'correo electronico','required']) !!}	
		</div>

		<div class="form-group">
			{!! Form::label('password','Contraseña') !!}
			{!! Form::password('password', ['class'=>'form-control','placeholder'=>'contraseña','required']) !!}		
		</div>

		<div class="form-group">
			{!! Form::label('type','Tipo') !!}
			{!! Form::select('type', [''=>'tipo de usuario', 'member'=>'Usuario','admin'=>'Administrador'], null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Registrar', ['class'=>'btn btn-primary']) !!}
		</div>

	{!! Form::close() !!}

@endsection 