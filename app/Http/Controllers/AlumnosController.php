<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnosController extends Controller
{
    public function index(){
        $alumnos = Alumno::all();

        $argumanetos = array();
        $argumanetos['alumnos'] = $alumnos;

        return  view('alumnos.index', $argumanetos);
    }
}
