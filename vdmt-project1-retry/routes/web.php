<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vdmtusercontroller;
use App\Http\Controllers\vdmttypeproductcontroller;
use App\Http\Controllers\vdmtproductcontroller;
use App\Http\Controllers\vdmtcustomercontroller;
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
// home admin
Route::get('/home/admin', function () {
    return view('frontend.admin.homeadmin');
});
//admin login
Route::get('/home/admin/login',[vdmtusercontroller::class,'vdmtlogin'])->name('admin.login');
Route::post('/home/admin/login',[vdmtusercontroller::class,'vdmtloginsubmit'])->name('admin.loginsubmit');


 
//type product list
Route::get('/home/admin/list-type-product',[vdmttypeproductcontroller::class,'vdmtlist'])->name('admin.list-type-product');
//type product create
Route::get('/home/admin/list-type-product/create',[vdmttypeproductcontroller::class,'vdmtcreate'])->name('admin.create');
Route::post('/home/admin/list-type-product',[vdmttypeproductcontroller::class,'vdmtcreatesubmit'])->name('admin.createsubmit');
//type product edit
Route::get('/home/admin/list-type-product/edit/{id}',[vdmttypeproductcontroller::class,'vdmttypeedit'])->name('admin.list-type-product.edit');
Route::post('/home/admin/list-type-product/edit',[vdmttypeproductcontroller::class,'vdmttypeeditsubmit'])->name('admin.list-type-product.editsubmit');
//type product delete
Route::get('/home/admin/list-type-product/delete/{id}',[vdmttypeproductcontroller::class,'vdmtdelete'])->name('admin.list-type-product.delete');


//product list
Route::get('/home/admin/list-product',[vdmtproductcontroller::class,'vdmtlistproduct'])->name('admin.list-product');
//product create
Route::get('/home/admin/list-product/create',[vdmtproductcontroller::class,'vdmtproductcreate'])->name('admin.create.product');
Route::post('/home/admin/list-product',[vdmtproductcontroller::class,'vdmtproductcreatesubmit'])->name('admin.createsubmit.product');
//product edit
Route::get('/home/admin/list-product/edit/{id}',[vdmtproductcontroller::class,'vdmtproductedit'])->name('admin.list-product.edit');
Route::post('/home/admin/list-product/edit',[vdmtproductcontroller::class,'vdmtproducteditsubmit'])->name('admin.list-product.editsubmit');
//product delete
Route::get('/home/admin/list-product/delete/{id}',[vdmtproductcontroller::class,'vdmtproductdelete'])->name('admin.list-product.delete');



//cus list
Route::get('/home/admin/customer',[vdmtcustomercontroller::class,'vdmtcustomerlist'])->name('admin.list-customer');
//cus create
Route::get('/home/admin/customer/create',[vdmtcustomercontroller::class,'vdmtcustomercreate'])->name('admin.create.customer');
Route::post('/home/admin/customer',[vdmtcustomercontroller::class,'vdmtcustomercreatesubmit'])->name('admin.createsubmit.customer');
//cus edit
Route::get('/home/admin/customer/edit/{id}',[vdmtcustomercontroller::class,'vdmtcustomeredit'])->name('admin.list-customer.edit');
Route::post('/home/admin/customer/edit',[vdmtcustomercontroller::class,'vdmtcustomereditsubmit'])->name('admin.list-customer.editsubmit');
//cus delete
Route::get('/home/admin/customer/delete/{id}',[vdmtcustomercontroller::class,'vdmtcustomerdelete'])->name('admin.list-customer.delete');