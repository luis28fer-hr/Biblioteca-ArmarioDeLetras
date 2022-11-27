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
        //
    }

    function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
