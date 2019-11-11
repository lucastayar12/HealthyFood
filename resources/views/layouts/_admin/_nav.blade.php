 <nav>
    <div class="nav-wrapper blue">
        <div class="container">
      <a href="{{route ('site.home')}}" class="brand-logo">SisAdmin</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
<<<<<<< HEAD
        <li><a href="{{route ('admin.principal')}}">Inicio</a></li>
        <li><a target="blanck" href="{{route ('site.home')}}">Site</a></li>
        @if(Auth::guest())
        <li><a href="{{route ('admin.login')}}">Entrar</a></li>
        @else

        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">{{ Auth::user()->name }} <i class="material-icons right">arrow_drop_down</i></a></li>
        
        <ul id="dropdown1" class="dropdown-content">
          <li><a href="#">{{ Auth::user()->name }}</a></li>
          <li><a href="{{ route('admin.usuarios')}}">Usuários</a></li>
          <li><a href="{{ route('admin.paginas')}}">Páginas</a></li>
        </ul>

        <li><a href="{{route('admin.login.sair')}}">Sair</a></li>

        @endif
=======
        <li><a href="{{route ('site.home')}}">Home</a></li>
>>>>>>> cbf467440a79771a5b34b0694878ed3602a40777
      </ul>
      </div>
    </div>


<ul class="sidenav" id="mobile-demo">
<<<<<<< HEAD
    <li><a href="{{route ('admin.principal')}}">Inicio</a></li>
    @if(Auth::guest())
        <li><a href="{{route ('admin.login')}}">Entrar</a></li>
        @else
        <li><a href="#">{{ Auth::user()->name }}</a></li>
        <li><a href="{{route('admin.login.sair')}}">Sair</a></li>

        @endif
=======
    <li><a href="{{route ('site.home')}}"></a>Home</li>
>>>>>>> cbf467440a79771a5b34b0694878ed3602a40777
</ul>
</nav>