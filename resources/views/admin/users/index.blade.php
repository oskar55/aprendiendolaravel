@extends('admin.template.main')


@section('title','Lista de usuarios')


@section('content')
	<a href=" {{ route('admin.users.create') }} " class="btn btn-info">Nuevo Usuario</a>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Tipo</th>
			<th>Accion</th>
		</thead>
		<tbody>
			<th>
				
				@foreach($users as $user)
					<tr>			
						<td> {{ $user->id }} </td>
						<td> {{ $user->name }} </td>
						<td> {{ $user->email }} </td>				
						<td> {{ $user->type }} </td>
						<td> 
							<a href="{{ route('admin.users.edit',$user->id) }}" class="btn btn-warning glyphicon glyphicon-pencil"></a> 
							<a href="{{ route('admin.users.destroy',$user->id)}}" class="btn btn-danger glyphicon glyphicon-remove"></a>
						</td>
					</tr>
				@endforeach

			</th>
		</tbody>
	</table>
	{!! $users->render() !!}
@endsection