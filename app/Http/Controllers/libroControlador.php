<?php

namespace App\Http\Controllers;

use App\Http\Requests\validarLibro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class libroControlador extends Controller
{
    public function index()
    {
        $consulta_autores = DB::table('tb_autores')->get();
        return view('libros', compact('consulta_autores'));
    }

    public function create()
    {
        $consulta_autores = DB::table('tb_autores')->get();
        return view('libros', compact('consulta_autores'));
    }

    public function store(validarLibro $req)
    {
        DB::table('tb_libros')->insert([
            "isbn" => $req -> input('isbn'),
            "titulo" => $req -> input('titulo'),
            "autor" => $req -> input('autor'),
            "paginas" => $req -> input('paginas'),
            "editorial" => $req -> input('editotial'),
            "correo" => $req -> input('email'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        $name = $req->input('titulo');
        return redirect('libros')->with('mensaje', 'Agregado correctamente')->with('Variable', $name);
    }

    public function show()
    {
        $consulta_libros = DB::table('tb_libros')->get();
        return view('libros-consultar', compact('consulta_libros'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
