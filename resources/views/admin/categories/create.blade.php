@extends('admin.template.main')
@section('title', 'Crear Categoria')
@section('content')
	{!! Form::open(['route' => 'categories.store', 'method' => 'POST']) !!}
		<div class="form-group">
			{!! Form::label('name', 'Categoria') !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la Categoria', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Crear', ['class' => 'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}
@endsection