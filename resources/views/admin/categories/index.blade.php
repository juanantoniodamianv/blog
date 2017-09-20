@extends('admin.template.main')
@section('title', 'Lista de Categorias')
@section('content')
	<br><a href="{{ route('categories.create') }}" class="btn btn-info">Nueva Categoria</a><br><br>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($categories as $category)
				<tr>
					<td>{{ $category->id }}</td>
					<td>{{ $category->name }}</td>
					<td>
						<a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-warning btn-sm"><i class="material-icons md-18">mode_edit</i></a> 
						<a href="{{ route('admin.categories.destroy', $category->id) }}" onclick="return confirm('¿Seguro desea eliminar este usuario?')" class="btn btn-danger btn-sm"><i class="material-icons md-18">delete</i></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{{ $categories->links() }}
@endsection