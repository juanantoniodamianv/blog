<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>{{ $article->title }}</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('css/general.css') }}">
	</head>
	<body>
		<h2>Articulos</h2>
		<br><br>
		<h4>{{ $article->title }}</h4>
		<hr>
		{{ $article->content }}
		<br>
		by {{ $article->user->name }} | {{ $article->category->name }} |
		@foreach($article->tags as $tag)
			{{ $tag->name }}
		@endforeach
	</body>
</html>