<?php

use App\Http\Controllers\AutorControlador;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\libroControlador;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});

Route::get('inicio', [controladorVistas::class, 'vwInicio'])->name('Inicio');



Route::get('libros', [libroControlador::class, 'index'])->name('Libros');
Route::get('libros/agregar', [libroControlador::class, 'create'])->name('Libros.agregar');
Route::post('libros/guardar', [libroControlador::class, 'store'])->name('Libros.guardar');
Route::get('libros/consultar', [libroControlador::class, 'show'])->name('Libros.consultar');
Route::get('libros/editar/{id}', [libroControlador::class, 'edit'])->name('Libros.editar');
Route::put('libros/actualizar/{id}', [libroControlador::class, 'update'])->name('Libros.actualizar');
Route::put('libros/eliminar/{id}', [libroControlador::class, 'destroy'])->name('Libros.eliminar');




Route::get('autores', [AutorControlador::class, 'index'])->name('Autores');
Route::get('autores/agregar', [AutorControlador::class, 'create'])->name('Autores.agregar');
Route::post('autores/guardar', [AutorControlador::class, 'store'])->name('Autores.guardar');
Route::get('autores/consultar', [AutorControlador::class, 'show'])->name('Autores.consultar');
Route::get('autores/editar/{id}', [AutorControlador::class, 'edit'])->name('Autores.editar');
Route::put('autores/actualizar/{id}', [AutorControlador::class, 'update'])->name('Autores.actualizar');
Route::put('autores/eliminar/{id}', [AutorControlador::class, 'destroy'])->name('Autores.eliminar');


