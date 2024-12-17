<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

use App\Http\Controllers\dbcontroller;

Route::get('/khoa',[dbcontroller::class,'datalist'])->name('khoa.datalist');

Route::get('/khoa/detail/{makhoa}',[dbcontroller::class,'detail'])->name('khoa.detail');

Route::get('/khoa/create',[dbcontroller::class,'create'])->name('khoa.create');

Route::post('/khoa/create',[dbcontroller::class,'createsubmit'])->name('khoa.createsubmit');