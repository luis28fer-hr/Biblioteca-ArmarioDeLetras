@extends('plantilla')
@section('contenido')

@if (session()->has('mensaje'))
<?php
$titulo = session()->get('Variable');
?>

{!!
    "<script>
        Swal.fire(
        'Todo correcto',
        'Libro: {$titulo} Agregado',
        'success'
        )</script>"!!}
@endif
<div class="container">
    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <a href="{{route('Libros.agregar')}}" class="btn btn-success me-md-2" type="button">Agregar</a>
        <a href="{{route('Libros.consultar')}}" class="btn btn-primary" type="button">Consultar</a>
    </div>
</div>

<form  method="post" action="{{route('Libros.guardar')}}">
    @csrf
    <section class="registrar">
        <div class="registrar_tiutlo">
            <p>Nuevo libro</p>
        </div>
        <div class="registrar_formulario">
            <div class="caja_input">
                <input type="text" name="isbn" class=" @error('isbn') invalido @enderror" placeholder="ISBN" value="{{old('isbn')}}">
                <span class="text-danger">{{$errors->first('isbn')}}</span>
            </div>
            <div class="caja_input">
                <input type="text" name="titulo" class=" @error('titulo') invalido @enderror" placeholder="Titulo de libro" value="{{old('titulo')}}">
                <span class="text-danger">{{$errors->first('titulo')}}</span>
            </div>
            <div class="caja_input">
                <select class="form-select @error('autor') invalido @enderror" name="autor" aria-label="Default select example">
                    <option selected disabled>Seleccione un autor</option>
                    @foreach ($consulta_autores as $autor)
                    <option value="{{$autor->Nombre}}">{{$autor->Nombre}}</option>
                    @endforeach
                  </select>
                <span class="text-danger">{{$errors->first('autor')}}</span>
            </div>
            <div class="caja_input">
                <input type="text" name="paginas" class=" @error('paginas') invalido @enderror" placeholder="Cantidad de paginas" value="{{old('paginas')}}">
                <span class="text-danger">{{$errors->first('paginas')}}</span>
            </div>
            <div class="caja_input">
                <input type="text" name="editotial" class=" @error('editotial') invalido @enderror" placeholder="Nombre de Editorial" value="{{old('editotial')}}">
                <span class="text-danger">{{$errors->first('editotial')}}</span>
            </div>
            <div class="caja_input">
                <input type="text" name="email" class=" @error('email') invalido @enderror" placeholder="Correo electronico de editorial" value="{{old('email')}}">
                <span class="text-danger">{{$errors->first('email')}}</span>
            </div>
        </div>
        <div class="botones">
            <button class="cancelar" type="reset">Cancelar</button>
            <button class="aceptar" type="submit">Registrar</button>
        </div>
    </section>
</form>
@endsection
