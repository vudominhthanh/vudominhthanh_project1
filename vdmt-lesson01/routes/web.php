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
    return view('minhthanh');
});

Route::get('/greeting', function () {
    return '<h1> Hello world </h1>';
});

Route::get('/vdmt', function () {
    return '<h1> Hello vu do minh thanh </h1>';
});

Route::redirect('here','there');    

Route::get('/there', function () {
    return '<h1> Hello vu do minh thanh there</h1>';
});

Route::get('/happy/{id}', function ($id) {
    return '<h1> Happy '.$id;
});




Route::get('/posts/{post}/comments/{comment}', function ($postID, $commentID) { 
    return "<h1>Posts: $postID; Comments: $commentID</h1>"; 
});

Route::get('/posts/{post}/comments/{comment}', function ($postID, $commentID) { 
    return "<h1>Posts: $postID; Comments: $commentID</h1>"; 
});



use Illuminate\http\Request;

Route::get('/user/{id}', function (Request $request, $id) { 
    return "<h1> User -> ".$id; 
});

Route::get('/wel/{name?}', function ($name = null) {
    return "<h1> Welcome, $name ";
});

Route::get('/user-constraint/{name}', function ($name) {
    return "<h1> Welcome [A-Za-z]+ ";
}) ->where('name','[A-Za-z]+');

Route::get('/user-constraint/{id}', function ($id) {
    return "<h1> Welcome [0-9]+ ";
}) ->where('id','[0-9]+');

Route::get('/user-constraint/{id}{name}', function ($id,$name) {
    return "<h1> Welcome ['id' => '[0-9]+' , 'name' => '[a-z]+']+ ";
}) ->where(['id' => '[0-9]+' , 'name' => '[a-z]+']);

Route::get('/user-check/{id}{name}', function ($id,$name) {
    return "<h1> Welcome [$id, $name]";
}) ->whereNumber('id')->whereAlpha('name');




Route::get('/search/{search?}', function ($search) {
    return "Tham so tren : $search";
}) ->where(['id' => '[0-9]+' , 'name' => '[a-z]+']);




use App\Http\Controllers\VdmtController;

Route::get('/named/display', [vdmtcontroller::class, 'display']) ->name('display.profile');

Route::get('/named/show', [vdmtcontroller::class, 'show']);




Route::group(['prefix'=>'admin'],function () {
    Route::get('/', function () {return "<h1> Welcome admin home ";});
    Route::get('/account', function () {return "<h1> Welcome admin account ";});
    Route::get('/product', function () {return "<h1> Welcome admin product ";});
});


use App\Http\Controllers\accountcontroller; 

Route::get('/account', [accountcontroller::class,'index']);

Route::get('/account-create',[accountcontroller::class,'create'])->name('account.create');

Route::get('/account-show',[accountcontroller::class,'showdata'])->name('account.show');

Route::get('/account-list',[accountcontroller::class,'list'])->name('account.list');