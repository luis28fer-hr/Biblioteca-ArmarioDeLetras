@extends('plantilla')
@section('contenido')

<div class="container">
    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <a href="{{route('Libros.agregar')}}" class="btn btn-success me-md-2" type="button">Agregar</a>
        <a href="{{route('Libros.consultar')}}" class="btn btn-primary" type="button">Consultar</a>
    </div>
</div>

<form  method="post" action="{{route('Libros.actualizar', $consulta_libros->idLibro)}}">
    @csrf
    {!!method_field('PUT')!!}

    <section class="registrar">
        <div class="registrar_tiutlo">
            <p>Editar libro</p>
        </div>
        <div class="registrar_formulario">
            <div class="caja_input">
                <input type="text" name="isbn" class=" @error('isbn') invalido @enderror" placeholder="ISBN" value="{{$consulta_libros->isbn}}">
                <span class="text-danger">{{$errors->first('isbn')}}</span>
            </div>
            <div class="caja_input">
                <input type="text" name="titulo" class=" @error('titulo') invalido @enderror" placeholder="Titulo de libro" value="{{$consulta_libros->titulo}}">
                <span class="text-danger">{{$errors->first('titulo')}}</span>
            </div>
            <div class="caja_input">
                <select class="form-select @error('autor') invalido @enderror" name="autor" aria-label="Default select example">
                    <option selected disabled>Seleccione un autor</option>
                    @foreach ($consulta_autores as $autor)
                    <option value="{{$autor->idAutor}}">{{$autor->idAutor}} - {{$autor->Nombre}}</option>
                    @endforeach
                  </select>
                <span class="text-danger">{{$errors->first('autor')}}</span>
            </div>
            <div class="caja_input">
                <input type="text" name="paginas" class=" @error('paginas') invalido @enderror" placeholder="Cantidad de paginas" value="{{$consulta_libros->paginas}}">
                <span class="text-danger">{{$errors->first('paginas')}}</span>
            </div>
            <div class="caja_input">
                <input type="text" name="editotial" class=" @error('editotial') invalido @enderror" placeholder="Nombre de Editorial" value="{{$consulta_libros->editorial}}">
                <span class="text-danger">{{$errors->first('editotial')}}</span>
            </div>
            <div class="caja_input">
                <input type="text" name="email" class=" @error('email') invalido @enderror" placeholder="Correo electronico de editorial" value="{{$consulta_libros->correo}}">
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
