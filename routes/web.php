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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get("/medida","MedidaController@index");
Route::post("/medida/guardar","MedidaController@save");
Route::get("/materiaPrima","MateriaPrimaController@index");
Route::post("/materiaPrima/guardar","MateriaPrimaController@save");
Route::get("/mueble","MuebleController@index");
Route::post("/mueble/guardar","MuebleController@save");
Route::get("/cliente","ClienteController@index");
Route::post("/cliente/guardar","ClienteController@save");
Route::get("/inicio","InicioController@index");