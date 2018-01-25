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

Route::get('/', 'Listagem@listaComponents');
Route::get('add','Listagem@adicionarComponentsView');
Route::post('add', 'Listagem@adicionarComponents');
Route::get('update', 'Listagem@updateComponents');
Route::get('update', 'Listagem@updateComponents');
Route::get('editar/{id}', 'Listagem@editarComponents');
Route::get('parts', 'Listagem@index');
Route::patch('update/{id}', 'Listagem@updateComponents');
