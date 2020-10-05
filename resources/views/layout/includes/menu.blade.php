
<nav class="navbar navbar-expand-lg navbar-light bg-success">
    <a class="navbar-brand" href="#">Administração</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.produtos')}}">Home</a>
          </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.produtos')}}">Registrar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.produtos')}}">Login</a>
            </li>


        <li class="nav-item active">
          <a class="nav-link" href="{{route('admin.cursos.adicionar')}}">Adicionar Cursos<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{route('admin.cursos')}}">Cursos</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{route('admin.produtos.adicionar')}}">Adicionar Produtos<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="{{route('admin.produtos')}}">Produtos</a>
          </li>


      </ul>
    </div>
  </nav>













