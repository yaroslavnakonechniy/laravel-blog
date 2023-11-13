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

Route::get('/posts', 'PostController@index')->namme('posts.index');
Route::get('/posts/create', 'PostController@create')->namme('posts.create');
Route::post('/posts', 'PostController@store')->namme('posts.store');
Route::get('/posts/{post}', 'PostController@show')->namme('posts.show');
Route::get('/posts/{post}/edit', 'PostController@edit')->namme('posts.edit');
Route::patch('/posts/{post}', 'PostController@update')->namme('posts.update');
Route::get('/posts/{post}', 'PostController@destroy')->namme('posts.destroy');