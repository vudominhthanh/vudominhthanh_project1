<?php

use Illuminate\Support\Facades\Route;
use Illuminate\http\Request;

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

use App\Http\Controllers\vdmtproductcontroller;

Route::get('/test', function () {
    return view('testview',[vdmtproductcontroller::class,'index']);
});
 
Route::get('/view-1',function() {
    return view('view1');
});

Route::get('/view-2',function() {
    return view('view2',['name'=>'Welcome,thanh']);
});

Route::get('/view-3',function() {
    return view('admin.view3',['name'=>'quan tri noi dung']);
});

use App\Http\Controllers\viewdemocontroller;

Route::get('/view-4',[viewdemocontroller::class,'view4'])->name('vdemoview.view4');

Route::get('/view-5',[viewdemocontroller::class,'view5'])->name('vdemoview.view5');

Route::get('/view-6',function() {
    return view('view6');
});

Route::get('/view-7',function() {
    return view('view7',[ 
                            'name'=>'Holapcma',
                            'arr'=>[1,2,3,4,5,6,7,8,9],
                        ]);
});

Route::get('/view-8',function() {
    return view('view8',[ 
                            'name'=>['Holapcma','thnh','Thanh1'],
                            'arr'=>[1,2,3,4,5,6,7,8,9],
                            'users'=>[]
                        ]);
});

Route::get('/home',function(){
    return view('index');
    });

Route::get('/about',function(){
    return view('about');
    });

Route::get('/contact',function(){
    return view('vdmt-contact');
    });
    