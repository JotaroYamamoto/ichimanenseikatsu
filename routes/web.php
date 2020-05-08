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

Route::get('posts/welcome', function () {
    return view('welcome');
});
Route::get('/','PostsController@index');

Route::get('posts/add','PostsController@add');
Route::post('posts/add','PostsController@create');

Route::get('posts/show','PostsController@show');

Route::get('posts/edit','PostsController@edit');
Route::post('posts/edit','PostsController@update');

Route::get('posts/delete','PostsController@delete');
Route::post('posts/delete','PostsController@remove');
