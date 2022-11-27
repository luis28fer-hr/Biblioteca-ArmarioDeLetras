<?php

namespace App\Http\Controllers;

use App\Http\Requests\validarAutor;
use GuzzleHttp\RetryMiddleware;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use App\Http\Requests\validarLibro;

class controladorVistas extends Controller
{

    public function vwInicio(){

        return view('inicio');

    }

}
