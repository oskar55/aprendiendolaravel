@extends('admin.template.main')

@section('title', 'lista de categorias')

@section('content')
	<a href="{{ route('admin.categories.create') }}" class="btn btn-info">Crear Nueva categoria</a><hr>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Accion</th>
		</thead>
		<tbody>
			@foreach($categories as $category)
				<tr>
					<td>{{ $category->id }}</td>
					<td>{{ $category->name }}</td>
					<td>
						<a href="{{ route('admin.categories.edit',$category->id) }}" class="btn btn-warning glyphicon glyphicon-pencil"></a> 
						<a href="{{ route('admin.categories.destroy',$category->id) }}" class="btn btn-danger glyphicon glyphicon-remove"></a>
					</td>
				</tr>
			@endforeach
		</tbody>		
	</table>
@endsection