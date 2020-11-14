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

Route::group(['middleware'=>['auth']],function(){
    Route::get('/', function () {
        return view('home');
    })->name('home');
    Route::resource('/user','App\Http\Controllers\userController');
    Route::resource('/clientes','App\Http\Controllers\clientesController');
    Route::resource('/productos','App\Http\Controllers\productosController');
    Route::resource('/proveedores','App\Http\Controllers\proveedoresController');
    Route::resource('/inventario','App\Http\Controllers\inventarioController');
    Route::resource('/ventas','App\Http\Controllers\facturasController');
    Route::post('/ventas/setQuantity','App\Http\Controllers\facturasController@setQuantity')->name('ventas.setQuantity');

});



Auth::routes();

