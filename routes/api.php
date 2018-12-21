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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// get list of tasks
Route::get('storage','StorageController@index');
// get specific task
Route::get('storage/{id}','StorageController@show');
// delete a task
Route::delete('storage/{id}','StorageController@destroy');
// update existing task
Route::put('storage','StorageController@store');
// create new task
Route::post('storage','StorageController@store');
