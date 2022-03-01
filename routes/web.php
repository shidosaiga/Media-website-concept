<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Route::middleware(['auth'])->group(function () {
Route::get('/profile', 'HomeController@index')->name('profile');
Route::get('/header', 'PostController@header')->name('header');
Route::get('/repassword', 'HomeController@indexrepassword')->name('repassword');
Route::post('/repassword_change', 'HomeController@repassword')->name('repassword_change');
Route::get('/', 'PostController@index');
Route::post('/store-post', 'PostController@store')->name('store-post');
Route::get('/post-add', 'PostController@create')->name('post-add');
Route::post('/profile_change', 'HomeController@update')->name('profile_change');
Route::get('/destroy/{id}', 'PostController@destroy')->name('post-destroy');
Route::get('/edit/{id}', 'PostController@edit')->name('post-edit');
Route::post('/change/{id}', 'PostController@update')->name('post-change');

});
