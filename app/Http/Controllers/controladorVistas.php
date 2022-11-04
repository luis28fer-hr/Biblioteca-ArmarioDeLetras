<?php

namespace App\Http\Controllers;

use GuzzleHttp\RetryMiddleware;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use App\Http\Requests\validarLibro;

class controladorVistas extends Controller
{

    public function vwInicio(){

        return view('inicio');

    }

    public function vwRegistrar(){

        return view('registrar');
    }


    public function validarNuevoLibro(validarLibro $req){

        $name = $req->input('titulo');
        return redirect('registrar')->with('mensaje', 'Agregado correctamente')->with('Variable', $name);
    }

}
