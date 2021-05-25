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


Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');

//PRODUCTOS
// Route::resource('productos','ProductoController')
// ->parameters(['productos'=>'productos'])
// ->names('productos');
Route::get('/producto','ProductoController@index')->name('productos.index');
Route::get('/producto/crear','ProductoController@create')->name('productos.create');
Route::get('/producto/{producto}/editar','ProductoController@edit')->name('productos.edit');
Route::patch('/producto/{producto}','ProductoController@update')->name('productos.update');
Route::post('/producto','ProductoController@store')->name('productos.store');
Route::get('/producto/{producto}','ProductoController@show')->name('productos.show');

Route::delete('/producto/{producto}','ProductoController@destroy')->name('productos.destroy');
Auth::routes();


//PEDIDOS
Route::get('/pedido','PedidoController@index')->name('pedidos.index');
Route::get('/pedido/crear','PedidoController@create')->name('pedidos.create');
Route::get('/pedido/{pedido}/editar','PedidoController@edit')->name('pedidos.edit');
Route::patch('/pedido/{pedido}','PedidoController@update')->name('pedidos.update');
Route::post('/pedido','PedidoController@store')->name('pedidos.store');
Route::get('/pedido/{pedido}','PedidoController@show')->name('pedidos.show');

Route::delete('/pedido/{pedido}','PedidoController@destroy')->name('pedidos.destroy');


//DETALLE DE PEDIDO
Route::get('/detalle_pedido','DetallePedidoController@index')->name('detalle_pedidos.index');
Route::get('/detalle_pedido/crear','DetallePedidoController@create')->name('detalle_pedidos.create');
Route::get('/detalle_pedido/{detalle_pedido}/editar','DetallePedidoController@edit')->name('detalle_pedidos.edit');
Route::patch('/detalle_pedido/{detalle_pedido}','DetallePedidoController@update')->name('detalle_pedidos.update');
Route::post('/detalle_pedido','DetallePedidoController@store')->name('detalle_pedidos.store');
Route::get('/detalle_pedido/{detalle_pedido}','DetallePedidoController@show')->name('detalle_pedidos.show');

Route::delete('/detalle_pedido/{detalle_pedido}','DetallePedidoController@destroy')->name('detalle_pedidos.destroy');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
