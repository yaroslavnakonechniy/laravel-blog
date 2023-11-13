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
    return view('layouts.main');
});

Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts/create', 'PostController@create')->name('posts.create');
Route::post('/posts/store', 'PostController@store')->name('posts.store');
Route::get('/posts/{id}/show', 'PostController@show')->name('posts.show');
Route::get('/posts/{id}/edit', 'PostController@edit')->name('posts.edit');
Route::post('/posts/{id}/update', 'PostController@update')->name('posts.update');
Route::get('/posts/{id}/delete', 'PostController@destroy')->name('posts.destroy');