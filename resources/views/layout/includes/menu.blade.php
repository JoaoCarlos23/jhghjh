
<nav class="navbar navbar-expand-lg navbar-light bg-success">
    <a class="navbar-brand" href="#">Administração</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}">Home Cursos<span class="sr-only">(current)</span></a>
          </li>


{{-- AQUI ABAIXO, O GHEST VAI EXIBIR QUEM NAO TEM LOGIN, O ELSE VAI EXIBIR PRA QUEM TEM LOGIN --}}

          @guest


          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>

          @else

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

            
{{-- AQUI ABAIXO É O DROPDOWN PRA SAIR DO LOGIN, DESLOGAR --}}


            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </li>


          {{-- ESSE LOGOUT ABAIXO TA FUNCIONANDO: --}}


          <li>

                  <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                    </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>


          </li>


          @endguest


      </ul>
    </div>
  </nav>













