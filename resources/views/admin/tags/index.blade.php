@extends('admin.template.main')


@section('title','Listado de Tags')


@section('content')
<a href=" {{ route('admin.tags.create') }}" class="btn btn-info">Nuevo Tag</a>

{{-- BUSCADOR DE TAGS --}}
	
	{!! Form::open(['route'=>'admin.tags.index','method'=>'GET','class'=>'navbar-form pull-right']) !!}
		<div class="input-group">
				
			{!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'busqueda', 'aria-describedby'=>'search']) !!}
			<span class="input-group-addon" id="search">
				<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
			</span>
		</div>
	{!! Form::close() !!}

{{-- BUSCADOR DE TAGS --}}
<hr>

<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>opciones</th>
		</thead>
		<tbody>
			<th>
				
				@foreach($tags as $tag)
					<tr>			
						<td> {{ $tag->id }} </td>
						<td> {{ $tag->name }} </td>
						<td> 
							<a href="{{ route('admin.tags.edit', $tag->id) }}" class="btn btn-warning glyphicon glyphicon-pencil"></a> 
							<a href="{{ route('admin.tags.destroy', $tag->id) }} " class="btn btn-danger glyphicon glyphicon-remove"></a>
						</td>
					</tr>
				@endforeach

			</th>
		</tbody>
	</table>
{!! $tags->render() !!}
@endsection