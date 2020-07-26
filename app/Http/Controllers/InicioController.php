<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use App\Models\Cliente;

class InicioController extends Controller
{
    public function index(){
    	return view("inicio.index");
    }

    public function save(Request $request){
    	$input = $request->all();
    	try{
    		DB::beginTransaction();
	    	$cliente = Cliente::create([
	    		"clie_nombre"=>$input["clie_nombre"],
	    		"clie_apellido"=>$input["clie_apellido"],
	    		"clie_documento"=>$input["clie_documento"],
	    		"clie_telefono"=>$input["clie_telefono"],
                "clie_direccion"=>$input["clie_direccion"]
	    	]);
	    	DB::commit();
	    	return redirect("/cliente")->with('status','1');
    	}catch(\Exception $e){
    		DB::rollBack();
	    	return redirect("/cliente")->with('status',$e->getMessage());
    	}
    }
}
