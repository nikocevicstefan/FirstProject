<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'TaskController@welcome');
Route::get('/tasks', 'TaskController@index');
Route::get('tasks/completed','TaskController@showCompleted');
Route::get('tasks/active','TaskController@showActive');
Route::get('tasks/favorite','TaskController@showFavorite');
Route::get('tasks/{task}', 'TaskController@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// novi task, brise task, brise sve taskove respektivno
Route::post('tasks','TaskController@store');
Route::delete('tasks/{task}', 'TaskController@delete');


//daje im favorite i complete properties respektivno
Route::patch('/tasks/favorite/{task}', 'TaskController@favorite');
Route::patch('/tasks/unfavorite/{task}', 'TaskController@unfavorite');

Route::patch('/tasks/completed/{task}', 'TaskController@complete');

Route::patch('/tasks/destroy','TaskController@destroy');

