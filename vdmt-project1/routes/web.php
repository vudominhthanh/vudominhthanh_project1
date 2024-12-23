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

Route::get('/home/admin', function () {
    return view('vdmthomeadmin');
});

use App\Http\Controllers\adminlogincontroller;


use App\Http\Controllers\vdmttypeproductcontroller;

Route::get('/home/admin/vdmttypeproduct',[vdmttypeproductcontroller::class,'typelist'])->name('typelists');

Route::get('/home/admin/vdmttypeproduct/edit/{id}',[vdmttypeproductcontroller::class,'typeedit'])->name('vdmttypeproduct.edit');

Route::post('/home/admin/vdmttypeproduct/edit',[vdmttypeproductcontroller::class,'typeeditsubmit'])->name('vdmttypeproduct.editsubmit');

Route::get('/home/admin/vdmttypeproduct/{id}',[vdmttypeproductcontroller::class,'delete'])->name('vdmttypeproduct.delete');

