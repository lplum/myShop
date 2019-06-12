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
    return view('welcome');
});
Route::get('/user','userController@index');
Route::prefix('/student')->group(function(){
    Route::get('/add','Student@add');
    Route::post('/save','Student@save');
    Route::get('/index','Student@index');
    Route::get('/del/{id}','Student@del');
    Route::get('/edit/{id}','Student@edit');
    Route::post('/update/','Student@update');
});
Route::prefix('/login')->group(function(){
    Route::get('/register','Login@register');
    Route::post('/doregister','Login@doregister');
    Route::get('/login','Login@login');
    Route::post('/dologin','Login@dologin');
});