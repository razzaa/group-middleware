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

Route::view('noaccess','noaccess');
Route::view('home','home');

Route::group(['middleware'=>['protectAge']],function(){
    Route::view('user','user');

Route::get('/', function () {
    return view('welcome');
});

});