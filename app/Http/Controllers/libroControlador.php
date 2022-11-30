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
        foreach($consulta_libros as $libro){
            $libro->autorNombre = DB::table('tb_autores')->where('idAutor', $libro->autor)->first();
        }

        return view('libros-consultar', compact('consulta_libros'));
    }

    public function edit($id)
    {
        $consulta_libros = DB::table('tb_libros')->where('idLibro', $id)->first();
        $autorRelacion = DB::table('tb_autores')->where('idAutor', $consulta_libros->autor)->first();
        $consulta_autores = DB::table('tb_autores')->get();

        return view('libros-editar', compact('consulta_libros', 'autorRelacion','consulta_autores'));
    }

    public function update(validarLibro $req, $id)
    {
        DB::table('tb_libros')->where('idLibro', $id)->update([
            "isbn" => $req -> input('isbn'),
            "titulo" => $req -> input('titulo'),
            "autor" => $req -> input('autor'),
            "paginas" => $req -> input('paginas'),
            "editorial" => $req -> input('editotial'),
            "correo" => $req -> input('email'),
            "updated_at" => Carbon::now()
        ]);
        $name = $req->input('titulo');
        return redirect('libros/consultar')->with('actualizar', 'Agregado correctamente')->with('Variable', $name);

    }

    public function destroy($id)
    {
        DB::table('tb_libros')->where('idLibro', $id)->delete();
        return redirect('libros/consultar')->with('eliminar', 'Agregado correctamente');
    }
}
