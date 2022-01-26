<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebasController extends Controller
{
    public function index(){
        $title = 'titulo Laravel';
        return view('pelicula.index', ['title' => $title]);
    }
}
