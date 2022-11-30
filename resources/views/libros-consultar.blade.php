@extends('plantilla')
@section('contenido')

@if (session()->has('actualizar'))
<?php
$titulo = session()->get('Variable');
?>

{!!
    "<script>
        Swal.fire(
        'Todo correcto',
        'Libro: {$titulo} Actualizado',
        'success'
        )</script>"!!}
@endif

@if (session()->has('actualizar'))
{!!
    "<script>
        Swal.fire(
        'Todo correcto',
        'Libro Eliminado',
        'success'
        )</script>"!!}
@endif

<div class="container">
    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <a href="{{route('Libros.agregar')}}" class="btn btn-success me-md-2" type="button">Agregar</a>
        <a href="{{route('Libros.consultar')}}" class="btn btn-primary" type="button">Consultar</a>
    </div>
</div>

<section class="container mt-4 mb-4">
    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">ISBN</th>
            <th scope="col">Titulo</th>
            <th scope="col">Autor</th>
            <th scope="col">Paginas</th>
            <th scope="col">Editorial</th>
            <th scope="col">Correo</th>
            <th scope="col">Opciones</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($consulta_libros as $libros)
                <tr>
                    <th scope="row">{{$libros->isbn}}</th>
                    <td>{{$libros->titulo}}</td>
                    <td>{{$libros->autorNombre->Nombre}}</td>
                    <td>{{$libros->paginas}}</td>
                    <td>{{$libros->editorial}}</td>
                    <td>{{$libros->correo}}</td>
                    <td>
                        <a href="{{route('Libros.editar', $libros->idLibro)}}" type="button" class="btn btn-outline-warning">Editar</a>
                        <a type="button" data-bs-toggle="modal" data-bs-target="#libroEliminar-{{$libros->idLibro}}" class="btn btn-outline-danger">Eliminar</a>
                    </td>
                </tr>
                @include('temporales.libro-eliminar')
            @endforeach
        </tbody>
      </table>
</section>
@endsection
