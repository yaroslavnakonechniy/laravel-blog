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

Route::group(['namespace' => 'Post'], function (){
    Route::get('/posts', 'IndexController')->name('posts.index');
    Route::get('/posts/create', 'CreateController')->name('posts.create');
    Route::post('/posts/store', 'StoreController')->name('posts.store');
    Route::get('/posts/{id}/show', 'ShowController')->name('posts.show');
    Route::get('/posts/{id}/edit', 'EditController')->name('posts.edit');
    Route::post('/posts/{id}/update', 'UpdateController')->name('posts.update');
    Route::get('/posts/{id}/delete', 'DestroyController')->name('posts.destroy');
});


Route::get('/category', 'CategoryController@index')->name('category.index');
Route::get('/category/create', 'CategoryController@create')->name('category.create');
Route::post('/category/store', 'CategoryController@store')->name('category.store');
Route::get('/category/{id}/show', 'CategoryController@show')->name('category.show');
Route::get('/category/{id}/edit', 'CategoryController@edit')->name('category.edit');
Route::post('/category/{id}/update', 'CategoryController@update')->name('category.update');
Route::get('/category/{id}/delete', 'CategoryController@destroy')->name('category.destroy');

Route::get('/tag', 'TagController@index')->name('tag.index');
Route::get('/tag/create', 'TagController@create')->name('tag.create');
Route::post('tagy/store', 'TagController@store')->name('tag.store');
Route::get('/tag/{id}/show', 'TagController@show')->name('tag.show');
Route::get('/tag/{id}/edit', 'TagController@edit')->name('tag.edit');
Route::post('tagy/{id}/update', 'TagController@update')->name('tag.update');
Route::get('/tag/{id}/delete', 'TagController@destroy')->name('tag.destroy');