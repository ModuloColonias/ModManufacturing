<?php

namespace App\Http\Controllers;
use DB; 

use Illuminate\Http\Request;
use App\Models\Medida;

class MedidaController extends Controller
{
    public function index(){
    	return view("medida.index");
    }
	public function save(Request $request){
    	$input = $request->all();
    	try{
    		DB::beginTransaction();
	    	$medida = Medida::create([
	    		"medi_descripcion"=>$input["medi_descripcion"]
	    	]);
	    	DB::commit();
	    	return redirect("/medida")->with('status','1');
    	}catch(\Exception $e){
    		DB::rollBack();
	    	return redirect("/medida")->with('status',$e->getMessage());
    	}
    }
}

