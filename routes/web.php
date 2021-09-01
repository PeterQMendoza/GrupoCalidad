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

Route::resource('productos','ProductoController')->names('productos');

// PEDIDOS
// Route::resource('pedidos','PedidoController')->names('pedidos');

// DETALLE DE PEDIDO
// Route::resource('detalle_pedidos','DetallePedidoController');

// CATEGORIA
Route::resource('categorias','CategoriaController');


Auth::routes(['register'=>false]);

