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
    //Route::get('/posts/create', 'CreateController')->name('posts.create');
    //Route::post('/posts/store', 'StoreController')->name('posts.store');
    Route::get('/posts/{id}/show', 'ShowController')->name('posts.show');
    //Route::get('/posts/{id}/edit', 'EditController')->name('posts.edit');
    //Route::post('/posts/{id}/update', 'UpdateController')->name('posts.update');
    //Route::get('/posts/{id}/delete', 'DestroyController')->name('posts.destroy');
});

Route::group(['namespace' => 'Category'], function () {
    Route::get('/category', 'IndexController')->name('category.index');
    Route::get('/category/create', 'CreateController')->name('category.create');
    Route::post('/category/store', 'StoreController')->name('category.store');
    Route::get('/category/{id}/show', 'ShowController')->name('category.show');
    Route::get('/category/{id}/edit', 'EditController')->name('category.edit');
    Route::post('/category/{id}/update', 'UpdateController')->name('category.update');
    Route::get('/category/{id}/delete', 'DestroyController')->name('category.destroy');
});

Route::group(['namespace' => 'Tag'], function () {
    Route::get('/tag', 'IndexController')->name('tag.index');
    Route::get('/tag/create', 'CreateController')->name('tag.create');
    Route::post('tagy/store', 'StoreController')->name('tag.store');
    Route::get('/tag/{id}/show', 'ShowController')->name('tag.show');
    Route::get('/tag/{id}/edit', 'EditController')->name('tag.edit');
    Route::post('tagy/{id}/update', 'UpdateController')->name('tag.update');
    Route::get('/tag/{id}/delete', 'DestroyController')->name('tag.destroy');
});

Route::get('/admin', 'MainController@index')->name('main.index');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Post'], function () {
        Route::get('/posts', 'IndexController')->name('admin.posts.index');
        Route::get('/posts/create', 'CreateController')->name('admin.posts.create');
        Route::post('/posts/store', 'StoreController')->name('admin.posts.store');
        Route::get('/posts/{id}/show', 'ShowController')->name('admin.posts.show');
        Route::get('/posts/{id}/edit', 'EditController')->name('admin.posts.edit');
        Route::post('/posts/{id}/update', 'UpdateController')->name('admin.posts.update');
        Route::get('/posts/{id}/delete', 'DestroyController')->name('admin.posts.destroy');

    });

});