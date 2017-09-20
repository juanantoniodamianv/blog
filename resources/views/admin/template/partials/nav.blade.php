<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Laravel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    @if (Auth::user())
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('users.index') }}">Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('categories.index') }}">Categorias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Articulos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Imágenes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#">Tags</a>
        </li>
      </ul>
    @endif
    @include('admin.template.partials.nav_users')
  </div>
</nav>