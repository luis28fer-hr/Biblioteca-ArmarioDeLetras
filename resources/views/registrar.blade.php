@extends('plantilla')
@section('contenido')

@if (session()->has('mensaje'))
{!!
    "<script>
        Swal.fire(
        'Todo correcto',
        'Libro: Agregado',
        'success'
        )</script>"!!}
@endif

<form  method="post" action="{{route('RegistrarLibro')}}">
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
                <input type="text" name="autor" class=" @error('autor') invalido @enderror" placeholder="Nombre del Autor" value="{{old('autor')}}">
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
