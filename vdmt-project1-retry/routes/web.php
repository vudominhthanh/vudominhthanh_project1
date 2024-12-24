<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vdmtusercontroller;
use App\Http\Controllers\vdmttypeproductcontroller;

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
    return view('frontend.admin.homeadmin');
});

Route::get('/home/admin/login',[vdmtusercontroller::class,'vdmtlogin'])->name('admin.login');
Route::post('/home/admin/login',[vdmtusercontroller::class,'vdmtloginsubmit'])->name('admin.loginsubmit');

Route::get('/home/admin/list-type-product/create',[vdmttypeproductcontroller::class,'vdmtcreate'])->name('admin.create');
Route::post('/home/admin/list-type-product',[vdmttypeproductcontroller::class,'vdmtcreatesubmit'])->name('admin.createsubmit');

Route::get('/home/admin/list-type-product',[vdmttypeproductcontroller::class,'vdmtlist'])->name('admin.list-type-product');

Route::get('/home/admin/list-type-product/edit/{id}',[vdmttypeproductcontroller::class,'vdmttypeedit'])->name('admin.list-type-product.edit');
Route::post('/home/admin/list-type-product/edit',[vdmttypeproductcontroller::class,'vdmttypeeditsubmit'])->name('admin.list-type-product.editsubmit');

Route::get('/home/admin/list-type-product/delete/{id}',[vdmttypeproductcontroller::class,'vdmtdelete'])->name('admin.list-type-product.delete');