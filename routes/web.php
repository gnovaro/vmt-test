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

Route::get('/task', 'TaskController@index', function (Request $request) {});
Route::get('/task/add', 'TaskController@add', function (Request $request) {});
Route::get('/task/edit/{id}', 'TaskController@edit', function (Request $request,$id) {});
Route::post('/task/save', 'TaskController@save', function (Request $request,$id) {});


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
