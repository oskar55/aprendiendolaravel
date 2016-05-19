@extends('admin.template.main')


@section('title','Editar usuario: '.$user->name)


@section('content')

	{!! Form::open(['route'=>['admin.users.update',$user],'method'=>'PUT']) !!}
		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name', $user->name, ['class'=>'form-control','placeholder'=>'Nombre completo','required']) !!}	
		</div>
		<div class="form-group">
			{!! Form::label('email','Email') !!}
			{!! Form::text('email', $user->email, ['class'=>'form-control','placeholder'=>'correo electronico','required']) !!}	
		</div>
		<div class="form-group">
			{!! Form::label('type','Tipo') !!}
			{!! Form::select('type', ['member'=>'Usuario','admin'=>'Administrador'], $user->type, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Editar', ['class'=>'btn btn-warning glyphicon glyphicon-pencil']) !!}
		</div>

	{!! Form::close() !!}

@endsection 