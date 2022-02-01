<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
use App\Models\Image;
Route::get('/', function () {
    // $images = Image::all();
    // foreach($images as $image){
        
    //     echo $image->image_path."<br>";
    //     echo $image->user->name."<br>";
    //     echo $image->description."<br>";
    //     foreach($image->comments as $comment){
    //         echo $comment-> user->name.": ".$comment->content."<br>";
    //     }
        
    //     echo "<hr/>";
    // }
        
    // die();
    return view('welcome');
})->name('home');
Route::get('/config', [UserController::class, 'config'])->middleware(['auth'])->name('config.index');
Route::post('/user/update', [UserController::class, 'update'])->middleware(['auth'])->name('config.update');
Route::get('/config/avatar/{filename?}', [UserController::class, 'getImage'])->middleware(['auth'])->name('config.avatar');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
