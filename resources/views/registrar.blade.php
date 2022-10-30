@extends('plantilla')
@section('contenido')

<div class="container mt-5 mb-5 col-md-6">

    <div class="card text-center">
        <div class="card-header">
            <h4>Nuevo Libro</h4>
        </div>
        <div class="card-body">
            <div class="mb-2 row">
                <label for="inputPassword" class="col-sm-2 col-form-label fw-semibold">ISBN</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword">
                </div>
            </div>
            <div class="mb-2 row">
                <label for="inputPassword" class="col-sm-2 col-form-label fw-semibold">Titulo</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword">
                </div>
            </div>
            <div class="mb-2 row">
                <label for="inputPassword" class="col-sm-2 col-form-label fw-semibold">Autor</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword">
                </div>
            </div>
            <div class="mb-2 row">
                <label for="inputPassword" class="col-sm-2 col-form-label fw-semibold">Paginas</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword">
                </div>
            </div>
            <div class="mb-2 row">
                <label for="inputPassword" class="col-sm-2 col-form-label fw-semibold">Editorial</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword">
                </div>
            </div>
            <div class="mb-4 row">
                <label for="inputPassword" class="col-sm-2 col-form-label fw-semibold">Email</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword">
                </div>
            </div>
        </div>
        <div class="card-footer text-muted">
            <div class="text-center">
                <button type="button" class="btn btn-outline-danger">Cancelar</button>
                <button type="button" class="btn btn-outline-primary">Registrar</button>
            </div>
        </div>
    </div>
</div>
@endsection
