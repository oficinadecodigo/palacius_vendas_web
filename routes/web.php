<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=> 'web'],function(){
});
Route::group(['middleware'=> 'web'],function(){
});
Route::group(['middleware'=> 'web'],function(){
});

Route::group(['middleware'=> 'web'],function(){
});

Route::group(['middleware'=> 'web'],function(){
});
//empresa Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('empresa','\App\Http\Controllers\EmpresaController');
  Route::post('empresa/{id}/update','\App\Http\Controllers\EmpresaController@update');
  Route::get('empresa/{id}/delete','\App\Http\Controllers\EmpresaController@destroy');
  Route::get('empresa/{id}/deleteMsg','\App\Http\Controllers\EmpresaController@DeleteMsg');
});

//filial Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('filial','\App\Http\Controllers\FilialController');
  Route::post('filial/{id}/update','\App\Http\Controllers\FilialController@update');
  Route::get('filial/{id}/delete','\App\Http\Controllers\FilialController@destroy');
  Route::get('filial/{id}/deleteMsg','\App\Http\Controllers\FilialController@DeleteMsg');
});

//cliente Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('cliente','\App\Http\Controllers\ClienteController');
  Route::post('cliente/{id}/update','\App\Http\Controllers\ClienteController@update');
  Route::get('cliente/{id}/delete','\App\Http\Controllers\ClienteController@destroy');
  Route::get('cliente/{id}/deleteMsg','\App\Http\Controllers\ClienteController@DeleteMsg');
});

//condicao_pagamento Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('condicao_pagamento','\App\Http\Controllers\Condicao_pagamentoController');
  Route::post('condicao_pagamento/{id}/update','\App\Http\Controllers\Condicao_pagamentoController@update');
  Route::get('condicao_pagamento/{id}/delete','\App\Http\Controllers\Condicao_pagamentoController@destroy');
  Route::get('condicao_pagamento/{id}/deleteMsg','\App\Http\Controllers\Condicao_pagamentoController@DeleteMsg');
});

//pedido Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('pedido','\App\Http\Controllers\PedidoController');
  Route::post('pedido/{id}/update','\App\Http\Controllers\PedidoController@update');
  Route::get('pedido/{id}/delete','\App\Http\Controllers\PedidoController@destroy');
  Route::get('pedido/{id}/deleteMsg','\App\Http\Controllers\PedidoController@DeleteMsg');
});

//produto Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('produto','\App\Http\Controllers\ProdutoController');
  Route::post('produto/{id}/update','\App\Http\Controllers\ProdutoController@update');
  Route::get('produto/{id}/delete','\App\Http\Controllers\ProdutoController@destroy');
  Route::get('produto/{id}/deleteMsg','\App\Http\Controllers\ProdutoController@DeleteMsg');
});

//pedido_item Routes
Route::group(['middleware'=> 'web'],function(){
  Route::resource('pedido_item','\App\Http\Controllers\Pedido_itemController');
  Route::post('pedido_item/{id}/update','\App\Http\Controllers\Pedido_itemController@update');
  Route::get('pedido_item/{id}/delete','\App\Http\Controllers\Pedido_itemController@destroy');
  Route::get('pedido_item/{id}/deleteMsg','\App\Http\Controllers\Pedido_itemController@DeleteMsg');
});
