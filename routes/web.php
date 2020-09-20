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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todos','TodosController@index'); // Load the index page

Route::get('todos/{todo}','TodosController@show'); // Load the todos

Route::get('new-todos','TodosController@create'); // Load the page to create new todos

Route::post('store-todos','TodosController@store'); // Load the controller to save new todos

Route::get('todos/{todo}/edit','TodosController@edit'); // Load the controller to edit todos

Route::post('/todos/{todo}/update-todos','TodosController@update'); // Load the controller to update todos

Route::get('todos/{todo}/delete','TodosController@delete'); // Load the controller to delete todos

Route::get('todos/complete/{todo}','TodosController@complete'); // Finish to
