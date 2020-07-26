<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use App\Models\Mueble;

class MuebleController extends Controller
{
    public function index(){
    	return view("mueble.index");
    }

    public function save(Request $request){
    	$input = $request->all();
    	try{
    		DB::beginTransaction();
	    	$mueble = Mueble::create([
	    		"mueb_descripcion"=>$input["mueb_descripcion"],
	    		"mueb_stock"=>$input["mueb_stock"],
	    		"mueb_costo"=>$input["mueb_costo"],
	    		"mueb_precio"=>$input["mueb_precio"]
	    	]);
	    	DB::commit();
	    	return redirect("/mueble")->with('status','1');
    	}catch(\Exception $e){
    		DB::rollBack();
	    	return redirect("/mueble")->with('status',$e->getMessage());
    	}
    }
}
