<?php

use Illuminate\Support\Facades\Route;

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */
use App\Http\Controllers\PeliculaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\FrutasController;

Route::get('/', function () {
    return view('welcome');
});
// Route::resource('/user', UsuarioController::class);
// Route::get('/peliculas', [PeliculaController::class,'index'])->name('peliculas.index');
// Route::get('/detalle/{year?}', [PeliculaController::class,'detalle'])->middleware('year')->name('peliculas.detalle');
// Route::get('/redirigir', [PeliculaController::class,'redirigir'])->name('peliculas.redirigir');
// Route::get('/formulario', [PeliculaController::class,'formulario'])->name('peliculas.formulario');
// Route::post('/formularioRequest', [PeliculaController::class,'formularioRequest'])->name('peliculas.formularioRequest');

//Rutas de frutas

Route::prefix('frutas')->group(function () {
    Route::get('index', [FrutasController::class, 'index'])->name('frutas.index');
    Route::get('details/{id?}', [FrutasController::class, 'details'])->name('frutas.details');
    Route::get('create', [FrutasController::class, 'create'])->name('frutas.create');
    Route::post('save', [FrutasController::class, 'save'])->name('frutas.save');
    Route::get('delete{id?}', [FrutasController::class, 'delete'])->name('frutas.delete');
    Route::get('edit{id?}', [FrutasController::class, 'edit'])->name('frutas.edit');
    Route::post('update', [FrutasController::class, 'update'])->name('frutas.update');
});
// Route::get('/mostrar-date', function () {
//     $titulo = "Mostrar fecha de Hoy con nay";
//     return view('mostrar-date', array(
// 'titulo' => $titulo
//     ));
// });
// Route::get('/manga/{titulo?}/{year?}', function ($titulo = "mangas", $year = "2021") {
//     return view('manga', array(
// 'titulo' => $titulo,
//  'year' => $year
//     ));
// })->where(array(
//     'titulo' => '[a-zA-Z]+',
//     'year' => '[0-9]{4}'
// ));

Route::get('/listado-peliculas', function () {
    $titulo = "Listado de Peliculas";
    
    $listado = array(
    ['nombre' => 'Spiderman', 'year' => '2021'],
        ['nombre' => 'Superman', 'year' => '2018'],
        ['nombre' => 'Batman', 'year' => '2019']
    );
    return view('Peliculas.listado')
            ->with('titulo', $titulo)
            ->with('listado', $listado);
});

// Route::get('/pagina-generica', function(){
//     return view('pagina');
// });