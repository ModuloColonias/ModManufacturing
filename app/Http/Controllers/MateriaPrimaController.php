<?php

namespace App\Http\Controllers;
use DB; 

use Illuminate\Http\Request;
use App\Models\Medida;
use App\Models\MateriaPrima;

class MateriaPrimaController extends Controller
{
    public function index(){

    	$medidas = Medida::all();
    	return view("materiaprima.index", compact("medidas"));
    }

    public function save(Request $request){
    	$input = $request->all();
    	try{
    		DB::beginTransaction();
	    	$materiaprima = MateriaPrima::create([
	    		//"mapr_codigo"=>$input["mapr_codigo"],
	    		"mapr_descripcion"=>$input["mapr_descripcion"],
	    		"mapr_stock"=>$input["mapr_stock"],
	    		"mapr_costo"=>$input["mapr_costo"],
	    		"medidas_medi_codigo"=>$input["medidas_medi_codigo"]
	    	]);
	    	DB::commit();
	    	return redirect("/materiaPrima")->with('status','1');
    	}catch(\Exception $e){
    		DB::rollBack();
	    	return redirect("/materiaPrima")->with('status',$e->getMessage());
    	}
    }
}
