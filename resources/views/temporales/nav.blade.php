
    <a class="titulo" href="{{route('Inicio')}}">ARMARIO DE LETRAS</a>
    <nav>
        <ul class="nav_links">
            <li><a class=" {{request()->routeIs('Inicio')? 'active_link': ''}}"  href="{{route('Inicio')}}">Inicio</a></li>
            <li><a class=" {{request()->routeIs('Registrar')? 'active_link': ''}}"  href="{{route('Registrar')}}">Registrar</a></li>
        <ul>
    </nav>
