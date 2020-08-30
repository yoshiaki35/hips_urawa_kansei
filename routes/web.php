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

Route::resource('/bloodltype','BloodltypesController');
Route::resource('/icon1','Icon1sController');
Route::resource('/icon2','Icon2sController');
Route::resource('/kenmei','KenmeisController');
Route::resource('/lasttime','LasttimesController');
Route::resource('/opentime','OpentimesController');
Route::resource('/option','OptionsController');
Route::resource('/tag1','Tag1sController');
Route::resource('/tag2','Tag2sController');

Route::get('/cast', 'CastsController@index')->name('cast.list');
Route::get('/profile/{id}', 'CastsController@show')->name('cast.datail');

//確認ページ
Route::post('/confirm', 'CastsController@confirm')->name('confirm');

//DB挿入、メール送信
Route::post('/process', 'CastsController@process')->name('process');

//完了ページ
Route::get('/complete', 'CastsController@complete')->name('complete');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
