<?php

namespace App\Http\Controllers;

use App\Http\Requests\validarAutor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class AutorControlador extends Controller
{

    public function index()
    {
        return view('autores');

    }


    public function create()
    {

        return view('autores');
    }

    public function store(validarAutor $req)
    {

        DB::table('tb_autores')->insert([
            "Nombre" => $req -> input('nombre'),
            "fecha" => $req -> input('fecha'),
            "libros" => $req -> input('libros'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        $name = $req->input('nombre');
        return redirect('autores')->with('mensaje', 'Agregado correctamente')->with('Variable', $name);
    }
    public function show()
    {
        $consulta_autores = DB::table('tb_autores')->get();
        return view('autores-consultar', compact('consulta_autores'));
    }

    public function edit($id)
    {
        $consulta_autor = DB::table('tb_autores')->where('idAutor', $id)->first();

        return view('autores-editar', compact('consulta_autor'));
    }

    function update(validarAutor $req, $id)
    {
        DB::table('tb_autores')->where('idAutor', $id)->update([
            "Nombre" => $req -> input('nombre'),
            "fecha" => $req -> input('fecha'),
            "libros" => $req -> input('libros'),
            "updated_at" => Carbon::now()
        ]);
        $name = $req->input('nombre');
        return redirect('autores/consultar')->with('actualizar', 'Agregado correctamente')->with('Variable', $name);
    }

    public function destroy($id)
    {
        DB::table('tb_autores')->where('idAutor', $id)->delete();
        return redirect('autores/consultar')->with('eliminar', 'Agregado correctamente');
    }
}
