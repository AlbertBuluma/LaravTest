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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

//    Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
Route::get('/tasks/', 'TaskController@index')->name('tasks.index');
//});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
