@extends('admin.template.main')
@section('title', 'Lista de Usuarios')
@section('content')
	<div class="row">
		<div class="col-md-6">
			<a href="{{ route('users.create') }}" class="btn btn-info">Nuevo Usuario</a>
		</div>		
		<div class="col-md-6">
			{{-- BUSCADOR --}}
			{!! Form::open(['route' => 'users.index', 'method' => 'GET', 'class' => 'navbar-form pull-right']) !!}
				<div class="input-group">
					{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => '', 'aria-describedby' => 'basic-addon1']) !!}
					<span class="input-group-btn">
				    	<button class="btn btn-sm btn-secondary" type="button">
				    		<i class="material-icons md-18">search</i>
				    	</button>
				    </span>
				</div>
			{!! Form::close() !!}
			{{-- FIN BUSCADOR --}}
		</div>
	</div>
	<hr>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Tipo</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>
						@if($user->type == "admin")
							<span class="badge badge-secondary">{{ $user->type }}</span>
						@else
							<span class="badge badge-secondary">{{ $user->type }}</span>
						@endif
					</td>
					<td>
						<a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning btn-sm"><i class="material-icons md-18">mode_edit</i></a> 
						<a href="{{ route('admin.users.destroy', $user->id) }}" onclick="return confirm('¿Seguro desea eliminar este usuario?')" class="btn btn-danger btn-sm"><i class="material-icons md-18">delete</i></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{{ $users->links() }}
@endsection