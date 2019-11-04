<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/', 'Api\MainController@index',function (Request $request) {});
Route::get('/version', 'Api\MainController@version',function (Request $request) {});

//Tasnk Routes
Route::get('/task', 'Api\TaskController@getAll',function (Request $request) {});
Route::get('/task/pending', 'Api\TaskController@getPending',function (Request $request) {});
Route::get('/task/running', 'Api\TaskController@getRunning',function (Request $request) {});
Route::get('/task/completed', 'Api\TaskController@getCompleted',function (Request $request) {});
Route::get('/task/run/{id}', 'Api\TaskController@run',function (Request $request,$id) {});
Route::post('/task/save', 'Api\TaskController@save',function (Request $request) {});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
