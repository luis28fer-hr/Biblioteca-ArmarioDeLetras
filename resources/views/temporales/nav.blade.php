
    <a class="titulo" href="{{route('Inicio')}}">ARMARIO DE LETRAS</a>
    <nav>
        <ul class="nav_links">
            <li><a class=" {{request()->routeIs('Inicio')? 'active_link': ''}}"  href="{{route('Inicio')}}">Inicio</a></li>
            <li><a class=" {{request()->routeIs('Libros*')? 'active_link': ''}}"  href="{{route('Libros')}}">Libros</a></li>
            <li><a class=" {{request()->routeIs('Autores*')? 'active_link': ''}}"  href="{{route('Autores')}}">Autores</a></li>
        <ul>
    </nav>
