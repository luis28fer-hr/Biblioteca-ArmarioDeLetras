<!-- Modal -->
<div class="modal fade" id="autorEliminar-{{$autores->idAutor}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">¿Estas seguro de elimianr el Autor?</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>ID: <span class="fw-bold">{{$autores->idAutor}}</span></p>
          <p>Nombre: <span class="fw-bold">{{$autores->Nombre}}</span></p>
          <p>Fecha: <span class="fw-bold">{{$autores->fecha}}</span></p>
          <p>Libros: <span class="fw-bold">{{$autores->libros}}</span></p>
        </div>
        <div class="modal-footer">
        <form action="{{route('Autores.eliminar', $autores->idAutor)}}" method="POST">
            @csrf
            {!!method_field('PUT')!!}

          <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal">Sí, eliminar</button>
        </form>
          <button type="button" class="btn btn-primary">No, cancelar</button>
        </div>
      </div>
    </div>
  </div>
