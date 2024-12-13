<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/search', 'SearchController@index')->name('search');



Route::get('/home',function(){
    return view('homemain');
});

Route::get('/head',function(){
    return view('_layouts.header');
});

Route::get('/nav',function(){
    return view('_layouts.navbar');
});

Route::get('/foot',function(){
    return view('_layouts.footer');
});

Route::get('/master',function(){
    return view('_layouts.master');
});
