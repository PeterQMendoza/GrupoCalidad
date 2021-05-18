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
// Route::resource('productos','ProductoController')
// ->parameters(['productos'=>'productos'])
// ->names('productos');
Route::get('/producto','ProductoController@index')->name('productos.index');
Route::get('/producto/crear','ProductoController@create')->name('productos.create');
Route::get('/producto/{producto}/editar','ProductoController@edit')->name('productos.edit');
Route::patch('/producto/{producto}','ProductoController@update')->name('productos.update');
Route::post('/producto','ProductoController@store')->name('productos.store');
Route::get('/producto/{producto}','ProductoController@show')->name('productos.show');