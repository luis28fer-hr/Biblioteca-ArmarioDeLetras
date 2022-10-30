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



<div class="container mt-5 mb-5 col-md-6">
    <form  method="post" action="{{route('RegistrarLibro')}}">
        @csrf
        <div class="card text-center">
            <div class="card-header">
                <h4>Nuevo Libro</h4>
            </div>
            <div class="card-body">
                <div class="mb-2 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label fw-semibold">ISBN</label>
                    <div class="col-sm-10">
                    <input type="text" name="isbn" class="form-control @error('isbn') is-invalid @enderror" id="inputPassword" value="{{old('isbn')}}">
                    <span class="text-danger">{{$errors->first('isbn')}}</span>

                    </div>
                </div>
                <div class="mb-2 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label fw-semibold">Titulo</label>
                    <div class="col-sm-10">
                    <input type="text" name="titulo" class="form-control @error('titulo') is-invalid @enderror" id="inputPassword" value="{{old('titulo')}}">
                    <span class="text-danger">{{$errors->first('titulo')}}</span>
                    </div>
                </div>
                <div class="mb-2 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label fw-semibold">Autor</label>
                    <div class="col-sm-10">
                    <input type="text" name="autor" class="form-control @error('autor') is-invalid @enderror" id="inputPassword" value="{{old('autor')}}">
                    <span class="text-danger">{{$errors->first('autor')}}</span>
                    </div>
                </div>
                <div class="mb-2 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label fw-semibold">Paginas</label>
                    <div class="col-sm-10">
                    <input type="text" name="paginas" class="form-control @error('paginas') is-invalid @enderror" id="inputPassword" value="{{old('paginas')}}">
                     <span class="text-danger">{{$errors->first('paginas')}}</span>

                    </div>
                </div>
                <div class="mb-2 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label fw-semibold">Editorial</label>
                    <div class="col-sm-10">
                    <input type="text" name="editotial" class="form-control @error('editotial') is-invalid @enderror" id="inputPassword" value="{{old('editotial')}}">
                     <span class="text-danger">{{$errors->first('editotial')}}</span>

                    </div>
                </div>
                <div class="mb-4 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label fw-semibold">Email</label>
                    <div class="col-sm-10">
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="inputPassword" value="{{old('email')}}">
                     <span class="text-danger">{{$errors->first('email')}}</span>

                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                <div class="text-center">
                    <button type="button" class="btn btn-outline-danger">Cancelar</button>
                    <button type="submit" class="btn btn-outline-primary">Registrar</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
