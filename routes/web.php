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


Route::get('/', function () {
    return view('layouts.master_layout');
});


Route::get('/index', function () {
    return view('post.index');
});




//proba
Route::get('proba', function(){
    return view('proba');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');