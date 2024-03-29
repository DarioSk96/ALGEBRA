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









Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('author/post', 'HomeController@getPostForm')->name('post.form');
Route::post('author/post', 'HomeController@createPost')->name('post.form');
Route::get('author/post/detail/{id}', 'HomeController@getPost')->name('post.detail');
Route::get('author/post/edit/{id}', 'HomeController@editPost')->name('edit.post');
Route::post('author/post/edit/{id}', 'HomeController@updatePost')->name('post.update');
Route::get('author/post/delete/{id}', 'HomeController@deletePost')->name('delete.post');
Route::get('/', 'HomeController@welcome')->name('welcome');






