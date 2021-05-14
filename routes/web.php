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




Route::get('/TaskManager','App\Http\Controllers\TaskManagerController@index')->name('TaskManager');
Route::get('/Task/{taskManager}','App\Http\Controllers\TaskManagerController@show')->name('show');

Route::get('/TaskManager/create','App\Http\Controllers\TaskManagerController@create')->name('create');
Route::post('/TaskManager/store','App\Http\Controllers\TaskManagerController@store')->name('store');
Route::get('/TaskManager/edit/{taskManager}','App\Http\Controllers\TaskManagerController@edit')->name('edit');
Route::put('/TaskManager/update/{taskManager}','App\Http\Controllers\TaskManagerController@update')->name('update');
Route::get('/TaskManager/destroy/{taskManager}','App\Http\Controllers\TaskManagerController@destroy')->name('destroy');

