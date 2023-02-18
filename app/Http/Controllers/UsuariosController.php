<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estado;

class UsuariosController extends Controller
{
    public function registro(){
        $estados = estados::all();
    
        return view("datos/registro") ->with(['estados' => $estados]);
    }
    public function js_municipios(Request $request){
        $id_estado = $request->get('id_estado');
        $municipios = tb_municipios::where('id_estado',$id_estado)->get();
        return view("datos/js_municipios")->with(['municipios' => $municipios]);
    }
}

