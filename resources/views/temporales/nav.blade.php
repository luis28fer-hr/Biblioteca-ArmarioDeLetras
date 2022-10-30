<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">B I B L I O T E C A</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link {{request()->routeIs('Inicio')? 'active': ''}}" aria-current="page" href="{{route('Inicio')}}">Inicio</a>
          <a class="nav-link {{request()->routeIs('Registrar')? 'active': ''}}"  href="{{route('Registrar')}}">Registrar</a>

        </div>
      </div>
    </div>
  </nav>
