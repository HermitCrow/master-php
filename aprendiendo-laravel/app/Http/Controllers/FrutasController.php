<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrutasController extends Controller
{
    public function index(){
        $frutas = DB::table('fruta')
        ->orderBy('Id','ASC')
        ->get();

        return view('Fruta.index',[
            'frutas'=> $frutas
        ]);
    }
    public function details($id){
        $frutas = DB::table('fruta')->where('id','=', $id)->first();
        //var_dump($frutas);
        //die();
        return view('Fruta.details',[
            'frutas'=> $frutas
        ]);
    }
    public function create(){
        return view('Fruta.create');
    }
    public function save(Request $request){
        $fruta = DB::table('fruta')->insert(array(
            'nombre' => $request->input('frutaName') ,
            'descripcion' => $request->input('descipcion'),
            'precio' => $request->input('precio'),
            'fecha' => $request->input('fecha')
        ));
         return redirect()->action([FrutasController::class, 'index'])->with('status','Fruta creada correctamente.');
    }

    public function delete($id){
        
            $fruta = DB::table('fruta')->where('Id', $id)->delete();
    
        return redirect()->action([FrutasController::class, 'index'])->with('status','Fruta borrada correctamente.');
    }

    public function edit($id){
        //sacar el registro de la base de datos
        $fruta = DB::table('fruta')->where('Id', $id)->first();
        //pasarlo a la vista
        return view('Fruta.create', ['fruta' => $fruta]);
    }

    public function update(Request $request){
        $fruta = DB::table('fruta')
        ->where('Id', $request->input('id'))
        ->update(array(
            'nombre' => $request->input('frutaName') ,
            'descripcion' => $request->input('descipcion'),
            'precio' => $request->input('precio'),
            'fecha' => $request->input('fecha')
        ));
         return redirect()->action([FrutasController::class, 'index'])->with('status','Fruta Actualizado correctamente.');        
    }


}
