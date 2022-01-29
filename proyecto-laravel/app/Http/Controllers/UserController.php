<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function config(){
        return view('user.config');
    }
    public function update(Request $request){
        $id = \Auth::user()->id;
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'nick' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email','max:255']
        ]);
        
        
        $name = $request->name  ;
        $surname = $request->surname;
        $nick = $request->nick;
        $email = $request->email;

        var_dump($id);
        var_dump($request->name);
        die();
    }
}
