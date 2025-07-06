<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class MatematicaController extends Controller
{

    public function index(){

    }

    public function atividades($atividade){
        return view($atividade);
    }
}
