
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
Route::get('/user', 'userController@index');
Route::prefix('/student')->group(function () {
    Route::get('/add', 'Student@add');
    Route::post('/save', 'Student@save');
    Route::get('/index', 'Student@index');
    Route::get('/del/{id}', 'Student@del');
    Route::get('/edit/{id}', 'Student@edit');
    Route::post('/update/', 'Student@update');
});
Route::prefix('/index')->group(function () {
    Route::get('/index', 'Index\IndexController@index');
    Route::get('/register', 'Index\LoginController@register');
    Route::post('/doregister', 'Index\LoginController@doregister');
    Route::get('/login', 'Index\LoginController@login');
    Route::post('/dologin', 'Index\LoginController@dologin');
});
Route::prefix('/home')->group(function () {
    Route::get('/index', 'Home\IndexController@index');
    Route::get('/goods/add', 'Home\GoodsController@add');
    Route::get('/goods/index', 'Home\GoodsController@index');
    Route::post('/goods/save', 'Home\GoodsController@save');
});
Route::prefix('/train')->group(function () {
    Route::get('/index', 'trainController@index');
    Route::get('/yuding/{id }', 'trainController@yuding');
});