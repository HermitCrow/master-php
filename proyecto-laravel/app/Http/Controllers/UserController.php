<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function config(){
        return view('user.config');
    }
    public function update(Request $request){

        //
        $id = \Auth::user()->id;
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'nick' => ['required', 'string', 'max:255', 'unique:users,nick,'.$id],
            'email' => ['required', 'string', 'email','max:255', 'unique:users,email,'.$id]
        ]);
        
        //Asignar valores al objeto del usuario
        $user = \Auth::user();
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->nick = $request->nick;
        $user->email = $request->email;

        // subir Avatar del usuario

        $image_path = $request->file('image_path');        
        if(is_object($image_path)){
            $image_path_full = uniqid().$image_path->getClientOriginalName();
            // var_dump($user);
            //  die();
            Storage::disk('users')->put($image_path_full, File::get($image_path));
            $user->image = $image_path_full;
        }

        // actualizar usuario
        $user->update();

        return redirect()
        ->route('config.index')
        ->with(['message' => 'Usuario Actualizado Correctamente']);
    }

    public function getImage($filename){
        $file = Storage::disk('users')->get($filename);
        return new Response($file, 200);
    }
}
