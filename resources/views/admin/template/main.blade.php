<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default') | Panel de Administración</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>
<body>
	@include('admin.template.partials.nav')
	<section><br>
		<div class="container">
			<div class="card">
				<div class="card-header">
					<h4>@yield('title', 'Default')</h4>
				</div>
				<div class="card-body">
					@include('flash::message')
					@include('admin.template.partials.errors')
					@yield('content')
				</div>
			</div>		
		</div>
	</section>
	<script src="{{ asset('plugins/jquery/js/jquery-3.2.1.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
	<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>