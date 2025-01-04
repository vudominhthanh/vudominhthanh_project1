<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::any("user/register", function() {
    $faker = Faker\Factory::create();
    $user = new User();
    $user = $faker->name;
    $user = $faker->unique()->safeemail;
    $user = $faker->Hash::make('password');
    if($user->save()) {
        $token = $user-> createToken('auth_token')->plainTextToken;
        return respone()->json(['Success' => 'Success', 'data' => $user,'token' => $token,'message' => "Login success"]);
    }
    return respone()->json(['Failed' => 'Failed','message' => "Login Failed"]);
});

Route::any("cus/register", function() {
    $faker = Faker\Factory::create();
    $cus = new vdmtcustomer();
    $cus = $faker->vdmtcusname;
    $cus = $faker->unique()->vdmtcusemail;
    $cus = $faker->Hash::make('vdmtcuspassword');
    if($user->save()) {
        $token = $cus-> createToken('auth_token')->plainTextToken;
        return respone()->json(['Success' => 'Success', 'data' => $cus,'token' => $token,'message' => "Login success"]);
    }
    return respone()->json(['Failed' => 'Failed','message' => "Login Failed"]);
});