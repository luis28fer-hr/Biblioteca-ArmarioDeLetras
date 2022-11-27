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

<form  method="post" action="{{route('Autores.guardar')}}">
    @csrf
    <section class="registrar">
        <div class="registrar_tiutlo">
            <p>Nuevo autor</p>
        </div>
        <div class="registrar_formulario">
            <div class="caja_input">
                <p>Nombre completo</p>
                <input name="nombre" class=" @error('nombre') invalido @enderror" placeholder="Nombre completo:" value="{{old('nombre')}}">
                <span class="text-danger">{{$errors->first('nombre')}}</span>
            </div>
            <div class="caja_input">
                <p>Fecha de nacimiento:</p>
                <input type="date" name="fecha" class=" @error('fecha') invalido @enderror" placeholder="Fecha de nacim" value="{{old('fecha')}}">
                <span class="text-danger">{{$errors->first('fecha')}}</span>
            </div>
            <div class="caja_input">
                <p>Numero de libros publicados:</p>
                <input name="libros" class=" @error('libros') invalido @enderror" placeholder="Numero de libros" value="{{old('libros')}}">
                <span class="text-danger">{{$errors->first('libros')}}</span>
            </div>
        </div>
        <div class="botones">
            <button class="cancelar" type="reset">Cancelar</button>
            <button class="aceptar" type="submit">Registrar</button>
        </div>
    </section>
</form>
@endsection
