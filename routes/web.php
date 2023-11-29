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
    Route::get('/posts/{id}/show', 'ShowController')->name('posts.show');
});

Route::group(['namespace' => 'Category'], function () {
    Route::get('/category', 'IndexController')->name('category.index');
    Route::get('/category/{id}/show', 'ShowController')->name('category.show');
});

Route::group(['namespace' => 'Tag'], function () {
    Route::get('/tag', 'IndexController')->name('tag.index');
    Route::get('/tag/{id}/show', 'ShowController')->name('tag.show');
});

Route::group(['namespace' => 'File'], function () {
    Route::get('/file', 'IndexController')->name('file.index');
    Route::get('/file/{id}/show', 'ShowController')->name('file.show');
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

    Route::group(['namespace' => 'Category'], function () {
        Route::get('/category', 'IndexController')->name('admin.category.index');
        Route::get('/category/create', 'CreateController')->name('admin.category.create');
        Route::post('/category/store', 'StoreController')->name('admin.category.store');
        Route::get('/category/{id}/show', 'ShowController')->name('admin.category.show');
        Route::get('/category/{id}/edit', 'EditController')->name('admin.category.edit');
        Route::post('/category/{id}/update', 'UpdateController')->name('admin.category.update');
        Route::get('/category/{id}/delete', 'DestroyController')->name('admin.category.destroy');
    });

    Route::group(['namespace' => 'Tag'], function () {
        Route::get('/tag', 'IndexController')->name('admin.tag.index');
        Route::get('/tag/create', 'CreateController')->name('admin.tag.create');
        Route::post('tagy/store', 'StoreController')->name('admin.tag.store');
        Route::get('/tag/{id}/show', 'ShowController')->name('admin.tag.show');
        Route::get('/tag/{id}/edit', 'EditController')->name('admin.tag.edit');
        Route::post('tag/{id}/update', 'UpdateController')->name('admin.tag.update');
        Route::get('/tag/{id}/delete', 'DestroyController')->name('admin.tag.destroy');
    });

    Route::group(['namespace' => 'File'], function () {
        Route::get('/file', 'IndexController')->name('admin.file.index');
        Route::get('/file/create', 'CreateController')->name('admin.file.create');
        Route::post('/file/store', 'StoreController')->name('admin.file.store');
        Route::get('/file/{id}/show', 'ShowController')->name('admin.file.show');
        Route::get('/file/{id}/edit', 'EditController')->name('admin.file.edit');
        Route::post('/file/{id}/update', 'UpdateController')->name('admin.file.update');
        Route::get('/file/{id}/delete', 'DestroyController')->name('admin.file.destroy');
    
    
    });

});