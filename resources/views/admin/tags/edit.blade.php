@extends('admin.template.main')


@section('title','Editar Tag: '.$tag->name)


@section('content')

	{!! Form::open(['route'=>['admin.tags.update',$tag],'method'=>'PUT']) !!}
		<div class="form-group">
			{!! Form::label('name','Nombre') !!}
			{!! Form::text('name', $tag->name, ['class'=>'form-control','placeholder'=>'Nombre completo','required']) !!}	
		</div>
		<div class="form-group">
			{!! Form::submit('Editar', ['class'=>'btn btn-warning glyphicon glyphicon-pencil']) !!}
		</div>

	{!! Form::close() !!}

@endsection 