<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{

    public function vwInicio(){

        return view('inicio');

    }

    public function vwRegistrar(){

        return view('registrar');
    }

}
