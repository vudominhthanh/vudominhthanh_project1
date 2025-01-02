<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\vdmtusercontroller;
use App\Http\Controllers\vdmttypeproductcontroller;
use App\Http\Controllers\vdmtproductcontroller;
use App\Http\Controllers\vdmtcustomercontroller;
use App\Http\Controllers\vdmtbillcontroller;
use App\Http\Controllers\homecontroller;
use \App\Http\Middleware\adminmiddleware;

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

Route::get('/greeting', function () {
    return view('welcome');
})->name('wel');
// admin login
Route::get('/login/admin',[vdmtusercontroller::class,'vdmtlogin'])->name('adminlogin');
Route::post('/login/admin',[vdmtusercontroller::class,'vdmtloginsubmit'])->name('adminloginsubmit');



Route::prefix('admin')->middleware('admin')->group(function() {
    // home admin  
    Route::get('/', function () { return view('frontend.admin.homeadmin'); })->name('homeadmin');

    //type product list
    Route::get('/list-type-product',[vdmttypeproductcontroller::class,'vdmtlist'])->name('admin.list-type-product');
    //type product create
    Route::get('/list-type-product/create',[vdmttypeproductcontroller::class,'vdmtcreate'])->name('admin.create');
    Route::post(' /list-type-product',[vdmttypeproductcontroller::class,'vdmtcreatesubmit'])->name('admin.createsubmit');
    //type product edit
    Route::get('/list-type-product/edit/{id}',[vdmttypeproductcontroller::class,'vdmttypeedit'])->name('admin.list-type-product.edit');
    Route::post(' /list-type-product/edit',[vdmttypeproductcontroller::class,'vdmttypeeditsubmit'])->name('admin.list-type-product.editsubmit');
    //type product delete
    Route::get('/list-type-product/delete/{id}',[vdmttypeproductcontroller::class,'vdmtdelete'])->name('admin.list-type-product.delete');


    //product list
    Route::get('/list-product',[vdmtproductcontroller::class,'vdmtlistproduct'])->name('admin.list-product');
    //product create
    Route::get('/list-product/create',[vdmtproductcontroller::class,'vdmtproductcreate'])->name('admin.create.product');
    Route::post('/list-product',[vdmtproductcontroller::class,'vdmtproductcreatesubmit'])->name('admin.createsubmit.product');
    //product edit
    Route::get('/list-product/edit/{id}',[vdmtproductcontroller::class,'vdmtproductedit'])->name('admin.list-product.edit');
    Route::post('/list-product/edit',[vdmtproductcontroller::class,'vdmtproducteditsubmit'])->name('admin.list-product.editsubmit');
    //product delete
    Route::get('/list-product/delete/{id}',[vdmtproductcontroller::class,'vdmtproductdelete'])->name('admin.list-product.delete');



    //cus list
    Route::get('/customer',[vdmtcustomercontroller::class,'vdmtcustomerlist'])->name('admin.list-customer');
    //cus create
    Route::get('/customer/create',[vdmtcustomercontroller::class,'vdmtcustomercreate'])->name('admin.create.customer');
    Route::post('/customer',[vdmtcustomercontroller::class,'vdmtcustomercreatesubmit'])->name('admin.createsubmit.customer');
    //cus edit
    Route::get('/customer/edit/{id}',[vdmtcustomercontroller::class,'vdmtcustomeredit'])->name('admin.list-customer.edit');
    Route::post('/customer/edit',[vdmtcustomercontroller::class,'vdmtcustomereditsubmit'])->name('admin.list-customer.editsubmit');
    //cus delete
    Route::get('/customer/delete/{id}',[vdmtcustomercontroller::class,'vdmtcustomerdelete'])->name('admin.list-customer.delete');


    //bill list
    Route::get('/bill',[vdmtbillcontroller::class,'vdmtbilllist'])->name('admin.bill-list');
    //bill create
    Route::get('/bill/create',[vdmtbillcontroller::class,'vdmtbillcreate'])->name('admin.create.bill');
    Route::post('/bill',[vdmtbillcontroller::class,'vdmtbillcreatesubmit'])->name('admin.createsubmit.bill');
    //bill edit
    Route::get('/bill/edit/{id}',[vdmtbillcontroller::class,'vdmtbilledit'])->name('admin.list-bill.edit');
    Route::post('/bill/edit',[vdmtbillcontroller::class,'vdmtbilleditsubmit'])->name('admin.list-bill.editsubmit');
    //billbill delete
    Route::get('/bill/delete/{id}',[vdmtbillcontroller::class,'vdmtbilldelete'])->name('admin.bill-list.delete'); 
});



//Home
Route::get('/home',[homecontroller::class,'home'])->name('home');
//Home type1
Route::get('/home/{vdmttypeproductid}',[homecontroller::class,'hometype'])->name('hometype');