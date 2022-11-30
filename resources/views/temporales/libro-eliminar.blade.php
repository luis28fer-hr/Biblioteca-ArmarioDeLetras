<!-- Modal -->
<div class="modal fade" id="libroEliminar-{{$libros->idLibro}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">¿Estas seguro de elimianr el Autor?</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>ID: <span class="fw-bold">{{$libros->idLibro}}</span></p>
          <p>ISBN: <span class="fw-bold">{{$libros->isbn}}</span></p>
          <p>Titulo: <span class="fw-bold">{{$libros->titulo}}</span></p>
          <p>Autor: <span class="fw-bold">{{$libros->autor}} - {{$libros->autorNombre->Nombre}}</span></p>
          <p>Paginas: <span class="fw-bold">{{$libros->paginas}}</span></p>
          <p>Editorial: <span class="fw-bold">{{$libros->editorial}}</span></p>
          <p>Correo: <span class="fw-bold">{{$libros->correo}}</span></p>

        </div>
        <div class="modal-footer">
        <form action="{{route('Libros.eliminar', $libros->idLibro)}}" method="POST">
            @csrf
            {!!method_field('PUT')!!}

          <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Sí, eliminar</button>
        </form>
          <button type="button" class="btn btn-primary">No, cancelar</button>
        </div>
      </div>
    </div>
  </div>
