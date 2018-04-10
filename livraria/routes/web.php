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

Route::get('/', 'livrariacontroller@index');

Route::get('/cadastro', 'livrariacontroller@create');
Route::get('/editar/{dados}', 'livrariacontroller@edit');

Route::post('/salva', 'livrariacontroller@save');
Route::post('/update', 'livrariacontroller@update');
Route::post('/delete/{livro}', 'livrariacontroller@delete');





