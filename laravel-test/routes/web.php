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

Route::get('/tasks', 'App\Http\Controllers\TasksController@index');
Route::get('/tasks/create', 'App\Http\Controllers\TasksController@create');
Route::get('/tasks/{task}', 'App\Http\Controllers\TasksController@show');
Route::post('/tasks', 'App\Http\Controllers\TasksController@store');
Route::get('/tasks/{task}/edit', 'App\Http\Controllers\TasksController@edit');
Route::put('/tasks/{task}', 'App\Http\Controllers\TasksController@update');
Route::delete('/tasks/{task}', 'App\Http\Controllers\TasksController@destroy');