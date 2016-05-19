@extends('admin.template.main')


@section('title','Agregar Tags')


@section('content')

{!! Form::open(['route'=>'admin.tags.store', 'method'=>'POST']) !!}
	
	<div class="form-group">
		{!! Form::label('name','Nombre Tag') !!}
		{!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nombre del tag', 'required']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
	</div>
	

{!! Form::close() !!}

@endsection