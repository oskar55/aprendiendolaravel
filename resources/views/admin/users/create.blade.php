@extends('admin.template.main')


@section('title','crear usuarios')



@section('content')

	{!! Form::open(['route'=>'admin.users.store','method'=>'POST'])!!}
		<div class="form-group">
			{!! Form::label('name','Nombre') !!}			
		</div>
	{!! Form::close() !!}

@endsection 