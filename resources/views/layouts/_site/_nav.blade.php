<nav>
    <div class="nav-wrapper blue">
        <div class="container">
      <a href="http://127.0.0.1:8000/" class="brand-logo">HealthyFood</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="{{ route('login') }}">Entrar</a></li>
        <li><a href="{{ route('register') }}">Registrar</a></li>
      </ul>
      </div>
    </div>


<ul class="sidenav" id="mobile-demo">
    <li><a href="{{ route('login') }}">Entrar</a></li>
    <li><a href="{{ route('register') }}">Registrar</a></li>>
</ul>
</nav>