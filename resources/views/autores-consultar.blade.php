@extends('plantilla')
@section('contenido')

@if (session()->has('mensaje'))
<?php
$nombre = session()->get('Variable');
?>

{!!
    "<script>
        Swal.fire(
        'Todo correcto',
        'Autor: {$nombre} Agregado',
        'success'
        )</script>"!!}
@endif

<div class="container">
    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <a href="{{route('Autores.agregar')}}" class="btn btn-success me-md-2" type="button">Agregar</a>
        <a href="{{route('Autores.consultar')}}" class="btn btn-primary" type="button">Consultar</a>
    </div>
</div>


<section class="container mt-4 mb-4">
    <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha</th>
            <th scope="col">libros</th>
            <th scope="col">Opciones</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($consulta_autores as $autores)

            <tr>
                <th scope="row">{{$autores->idAutor}}</th>
                <td>{{$autores->Nombre}}</td>
                <td>{{$autores->fecha}}</td>
                <td>{{$autores->libros}}</td>
                <td>
                    <a type="button" class="btn btn-outline-warning">Editar</a>
                    <a type="button" class="btn btn-outline-danger">Eliminar</a>
                </td>
              </tr>

            @endforeach

        </tbody>
      </table>
</section>
@endsection
