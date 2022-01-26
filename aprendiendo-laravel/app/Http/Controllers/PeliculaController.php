<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PeliculaController extends Controller
{
    public function index(){
        $title = 'titulo Laravel';
        return view('pelicula.index', ['title' => $title]);
    }
    public function detalle($year = null){
        return view('pelicula.detalle');
    }
    public function redirigir(){
        return redirect()->route('peliculas.detalle');
    }
    public function formulario(){
        return view('pelicula.formulario');
    }
    public function formularioRequest(Request $request){
        $nombre = $request->input('firstname');
        $apellido = $request->input('lastname');       
        return "El nombre es: $nombre y el apellido es: $apellido";
    }
    
}
