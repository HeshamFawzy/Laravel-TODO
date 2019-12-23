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

Route::resource('todo', 'TodosController');

Route::get('/home', 'TodosController@index')->name('todos.index');

Route::get('/show/{id}', 'TodosController@show')->name('todos.show');

Route::get('/create', 'TodosController@create')->name('todos.create');

Route::get('/edit/{id}', 'TodosController@edit')->name('todos.edit');

Route::get('/delete/{id}', 'TodosController@destroy')->name('todos.destroy');